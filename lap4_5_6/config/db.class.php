/* The Db class in PHP contains methods to interact with a MySQL database including connecting to the
database, executing SQL queries, and returning query results as arrays. */
<?php

/**
 * The Db class contains methods to interact with MySQL database.
 */
class Db
{
    // Database connection variable
    protected static $connection;

    /**
     * Initializes the database connection.
     * @return mysqli The database connection object.
     */
    public function connect()
    {
        // Establish connection to MySQL database
        $connection = mysqli_connect(
            "localhost",
            "root",
            "",
            "demo_lap3"
        );

        // Set connection charset to UTF-8
        mysqli_set_charset($connection, 'utf8');

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Database connection failed: " . mysqli_connect_error();
        }

        return $connection;
    }

    /**
     * Executes SQL query.
     * @param string $queryString The SQL query.
     * @return mixed The result of the query.
     */
    public function query_execute($queryString)
    {
        // Initialize connection
        $connection = $this->connect();

        // Execute query, query is a function of mysqli library
        $result = $connection->query($queryString);

        // Close connection after query execution
        $connection->close();

        return $result;
    }

    /**
     * Executes query and returns result as an array.
     * @param string $queryString The SQL query.
     * @return array|false Array result of the query or false if there's an error.
     */
    public function select_to_array($queryString)
    {
        $rows = array();

        // Execute query
        $result = $this->query_execute($queryString);

        // Check query result
        if ($result == false) {
            return false;
        }

        // Loop through each row of data and add to array
        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }

        return $rows;
    }
}
?>
