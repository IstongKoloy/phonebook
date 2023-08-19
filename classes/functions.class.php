<?php

class Functions extends Db {
    
    public function fetchAllData() {
        $sql = "SELECT * FROM phonebook";
        $stmt = $this->connect()->query($sql);
        $tbody = "";
        $cnt = 1;
        if($stmt->num_rows > 0) {
            while($row = $stmt->fetch_assoc()) {
                $tbody .= "<tr>";
                $tbody .= "<td class='text-center'>$cnt</td>";
                $tbody .= "<td>$row[fullName]</td>";
                $tbody .= "<td>$row[email]</td>";
                $tbody .= "<td>$row[address]</td>";
                $tbody .= "<td>$row[number]</td>";
                $tbody .= " <td class='text-center'>
                                <button class='btn btn-outline-info btn-sm'>Edit</button>
                                <button class='btn btn-outline-danger btn-sm'>Delete</button>
                            </td>";
                $tbody .= "</tr>";
                $cnt++;
            }
        }else {
            $tbody .= "No data found.";
        }
        return $tbody;
    }
}