<?php
$con=mysqli_connect('localhost', 'root', '', 'idealizer');
if($con){
echo "success";
}
$draw = $request['draw'];
$row = $request['start'];
$rowperpage = $request['length']; // Rows display per page
$columnIndex = $request['order'][0]['column']; // Column index
$columnName = $request['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $request['order'][0]['dir']; // asc or desc
$searchValue = $request['search']['value']; // Search value

## Custom Field value
$searchByRole = $request['searchByRole'];
$searchByName = $request['searchByName'];
$searchByStatus = $request['searchByStatus'];

## Search 
$searchQuery = " ";
if($searchByName != ''){
   $searchQuery .= " and (name like '%".$searchByName."%' ) ";
}
if($searchByRole != ''){
   $searchQuery .= " and (user_role='".$searchByRole."') ";
}if($searchByStatus != ''){
   $searchQuery .= " and (user_status='".$searchByStatus."') ";
}
if($searchValue != ''){
   $searchQuery .= " and (emp_name like '%".$searchValue."%' or 
      email like '%".$searchValue."%' or 
      city like'%".$searchValue."%' ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from users");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from users WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from users WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
   $data[] = array(
     "name"=>$row['name'],
     "email"=>$row['email'],
     "status"=>$row['user_status'],
     "role"=>$row['user_role'],
     "user_check"=>$row['user_check']
   );
}

## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data
);

echo json_encode($response);
        ?>