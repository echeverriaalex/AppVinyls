<?php
    require_once("nav.php");
?>

<div>
    <table>
        <thead>
            <th> Artist </th>
            <th> Disk name </th>
            <th> Year edition </th>
            <th> Country edition </th>
            <th> Status box </th>
            <th> Status disk </th>
            <th> Disk format </th>
            <th> Gender </th>
            <th> Velocity </th>
            <th> Observations </th>
        </thead>

        <tbody>
            <?php 
                if(!empty($vinylsList)){
                    foreach($vinylsList as $vinyl){ 
            ?>
                    <tr>
                        <td> <?php echo $vinyl->getArtist(); ?> </td>
                        <td> <?php echo $vinyl->getDiskName(); ?> </td>
                        <td> <?php echo $vinyl->getYearEdition(); ?> </td>
                        <td> <?php echo $vinyl->getCountryEdition(); ?> </td>
                        <td> <?php echo $vinyl->getStatusBox(); ?> </td>
                        <td> <?php echo $vinyl->getStatusDisk(); ?> </td>
                        <td> <?php echo $vinyl->getDiskFormat(); ?> </td>
                        <td> <?php echo $vinyl->getGender(); ?> </td>
                        <td> <?php echo $vinyl->getVelocity(); ?> </td>
                        <td> <?php echo $vinyl->getObservation(); ?> </td>
                    </tr>
            <?php 
                    }
                }
                else{

                    echo "no data";
                }
            ?>
        </tbody>    
    </table>
</div>