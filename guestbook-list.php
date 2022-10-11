<?php
	require('config/db.php');

	$res = mysqli_query($conn, "SELECT * FROM person");
	$persons=mysqli_fetch_all($res, MYSQLI_ASSOC);
	mysqli_free_result($res);
	
?>	

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>	
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($persons as $person) : ?>
                    <tr>
                    <th scope="row"><?php echo $person['num_ber'];?></th>
                    <td><?php echo $person['lastname'];?></td>
                    <td><?php echo $person['firstname'];?></td>
                    <td><?php echo $person['address'];?></td>
                    <td><?php echo $person['logdt'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='index.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>