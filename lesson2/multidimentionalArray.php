<style>
    table{
        width: 100%;
        
    }
    table,th,td{border:1px solid blue; border-collapse: collapse;}
    th,td{padding:5px; text-align: center;}
    th{background-color: #000000; color: white;}
    tr:nth-child(even){background-color: #f2f2f2;}
    tr:hover{background-color: #ddd;}
    th{text-align: center;}
    td{text-align: center;}

</style>
<?php
$people=array(
    array('mustaf ahmed','06150000','yaqshid'),
    array('ali ali','061500011','hoda'),
    array('maalin Yasir','0615022514','talex')
    

);
// echo $people[1][2];

$i=1;
?>
<table>
    <thead><tr><th>NO</th><th>Name</th><th>tell</th><th>Adress</th></tr></thead>
    <tbody>
        <?php foreach ($people as $key => $person):?> 
            <tr><td><?php  echo  $i; ?></td>
            <?php foreach ($person as $key => $value):?> 
                <td><?php  echo  $value;?></td>
            <?php endforeach ?>
        </tr>
        <?php $i++; endforeach ?>
           
    </tbody>
</table>

