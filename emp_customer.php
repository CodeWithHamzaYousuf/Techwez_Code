<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .update-btn{
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        
        }
        .deleteds{
            background-color: red;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        
        }

        .container_table {
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search-container {
            margin-bottom: 20px;
        }

        .search-container form {
            display: flex;
            flex-wrap: wrap;
        }

        .search-container input[type="text"] {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }

        .search-container button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: rgba(71, 4, 103, 0.8);
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: rgba(71, 4, 103, 0.8);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr.highlight {
            background-color: lightgreen;
        }

        @media screen and (max-width: 768px) {
            th, td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }

            th {
                background-color: transparent;
                color: #333;
                text-align: left;
            }

            td {
                text-align: right;
                position: relative;
                padding-left: 50%;
                white-space: nowrap;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: calc(50% - 20px);
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
            }

            .search-container input[type="text"], .search-container button {
                margin: 5px 0;
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container_table">
        <div class="search-container">
            <form action="" method="GET">
                <input type="text" id="search" name="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>Service</th>
                    <th>DELETE</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                $conn = mysqli_connect("localhost", "root", "", "my_salon");

                $query = "SELECT * FROM appointment where service= 'Pedicure'";
                $result = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_assoc($result)) {
                    echo '<tr id="row-' . htmlspecialchars($data['id']) . '">';
                    echo '<td data-label="Name">' . htmlspecialchars($data['name']) . '</td>';
                    echo '<td data-label="Email">' . htmlspecialchars($data['email']) . '</td>';
                    echo '<td data-label="Number">' . htmlspecialchars($data['phone']) . '</td>';
                    echo '<td data-label="Address">' . htmlspecialchars($data['address']) . '</td>';
                    echo '<td data-label="Service">' . htmlspecialchars($data['service']) . '</td>';
                  
                    echo '<td data-label="UPDATE">
                            <button type="button" class="update-btn" data-id="' . htmlspecialchars($data['id']) . '">UPDATE</button>
                          </td>';
                    echo '</tr>';
                }

                if (isset($_POST['delete'])) {
                    $id_to_delete = $_POST['delete_id'];
                    $delete_query = "DELETE FROM appointment WHERE id = ?";
                    $stmt = $conn->prepare($delete_query);
                    $stmt->bind_param("i", $id_to_delete);
                    if ($stmt->execute()) {
                        echo "<script>alert('Data Deleted'); window.location.href='';</script>";
                    } else {
                        echo "<script>alert('Data Not Deleted');</script>";
                    }
                    $stmt->close();
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Highlight rows based on localStorage
            function highlightRows() {
                let highlightedRows = JSON.parse(localStorage.getItem('highlightedRows')) || [];
                highlightedRows.forEach(function(id) {
                    $('#row-' + id).addClass('highlight');
                });
            }

            // Initial call to highlight rows
            highlightRows();

            $('#search').on('keyup', function() {
                var searchTerm = $(this).val();
                $.ajax({
                    url: 'search.php',
                    method: 'GET',
                    data: { search: searchTerm },
                    success: function(response) {
                        $('tbody').html(response);
                        // Reapply highlights after search results are loaded
                        highlightRows();
                    }
                });
            });

            // Add event listener for update buttons
            $('body').on('click', '.update-btn', function() {
                var rowId = $(this).data('id');
                var $row = $('#row-' + rowId);

                $row.toggleClass('highlight');
                let highlightedRows = JSON.parse(localStorage.getItem('highlightedRows')) || [];

                if ($row.hasClass('highlight')) {
                    if (!highlightedRows.includes(rowId)) {
                        highlightedRows.push(rowId);
                    }
                } else {
                    highlightedRows = highlightedRows.filter(function(id) {
                        return id != rowId;
                    });
                }

                localStorage.setItem('highlightedRows', JSON.stringify(highlightedRows));
            });
        });
    </script>
</body>
</html>
