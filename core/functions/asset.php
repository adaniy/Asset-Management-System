<?php

function addAsset($con, $asset_data) {
    $fields='`' .implode('`,`' ,array_keys($asset_data)) . '`';
    $data = '\'' . implode('\', \'' ,$asset_data ) . '\' ';

    mysqli_query($con,"INSERT INTO assets($fields) VALUES ($data)");
}



function asset_data($con,$id){
        $data =array();
        $id= (int)$id;
        $res=mysqli_query($con,"SELECT `id`,`title`,`category`,`quantity`,`price` FROM `assets` WHERE `id`= $id");

            $data = mysqli_fetch_assoc($res);
            return $data;

}

function getAssets($con, $userid) {
    $sql = "SELECT * FROM assets WHERE userid=$userid";
    return $con->query($sql);
}

function output_errors($errors) {
    return '<ul style="list-style:none;"><li>'. implode('</li><li>',$errors) . '</li></ul>';
}


function update_data(){

    

}



function delete_data($con,$id){

    $query = "DELETE FROM `assets` WHERE `id`= $id";
    mysqli_query($con,$query);
}
?>