<?php
 // function to create database connection
 function connect()
 {
     $conn=mysqli_connect("localhost","root","","job_listing");
     if(!$conn)
     {
         die("connection failed:".mysqli_connect_error());
     }
     return $conn;
 }
 // function to close database connection
 function close($conn)
 {
     mysqli_close($conn);
 }
 // function to execute query
 function query($conn,$sql)
 {
     $res=mysqli_query($conn,$sql);
     if(!$res)
     {
         die("query failed:".mysqli_error($conn));
     }
     return $res;
 }
 // function to fetch a row
 function fetch_row($res)
 {
     $row=mysqli_fetch_row($res);
     if(!$row)
     {
         die("database error:".mysqli_error($res));
     }
     return $row;
 }
 // function to fetch a single column
 function fetch_single($res)
 {
     $row=mysqli_fetch_row($res);
     if(!$row)
     {
         die("database error:".mysqli_error($res));
     }
     return $row[0];
 }
 // function to fetch all the rows
 function fetch_all($res)
 {
     $rows=array();
     while($row=mysqli_fetch_row($res))
     {
         $rows[]=$row;
     }
     if(!$rows)
     {
         die("database error:".mysqli_error($res));
     }
     return $rows;
 }
 // function to insert a row
 function insert($conn,$table,$data)
 {
 }

?>