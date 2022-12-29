<?php include('../config.php');?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | ERP Model</title>
        <link rel="stylesheet" href="./assets/css/base-styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
			input[type=checkbox]
			{
			  /* Double-sized Checkboxes */
			  -ms-transform: scale(1.3); /* IE */
			  -moz-transform: scale(1.3); /* FF */
			  -webkit-transform: scale(1.3); /* Safari and Chrome */
			  -o-transform: scale(1.3); /* Opera */
			  transform: scale(1.3);
			  padding: 10px;
			  cursor:pointer;
			}
		</style>
    </head>

	<body>
        <div class="container-fluid">
			<div class="col-lg-12">
				<div class="row mb-4 mt-4">
					<div class="col-md-12">

					</div>
				</div>
				<div class="row">
					<!-- FORM Panel -->

					<!-- Table Panel -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-header" style="background-color:#1d3b55">
						        <b  style="color:white">List of Courses and Fees</b>
							</div>
							<div class="card-body">
								<table class="table table-condensed table-bordered table-hover">
									<thead>
										<tr style="background-color:#87CEFA">
											<th class="text-center">S.No.</th>
											<th class="text-center">Standard</th>
											<th class="text-center">Description</th>
											<th class="text-center">Total Fee</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i = 1;
										$course = $conn->query("SELECT * FROM classes  order by standard asc ");
										while($row=$course->fetch_assoc()):
										?>
										<tr>
											<td class="text-center"><?php echo $i++ ?></td>
											<td>
												<p> <b><?php echo $row['standard'] ?></b></p>
											</td>
											<td class="">
												 <p><small><i><b><?php echo $row['description'] ?></i></small></p>
											</td>
											<td class="text-right">
												<p> <b><?php echo number_format($row['total_amount'],2) ?></b></p>
											</td>
											<td class="text-center">
												<button class="btn btn-sm btn-outline-primary edit_course" type="button" data-id="<?php echo $row['class_id'] ?>" >Edit</button>
												<button class="btn btn-sm btn-outline-danger delete_course" type="button" data-id="<?php echo $row['class_id'] ?>">Delete</button>
											</td>
										</tr>
										<?php endwhile; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Table Panel -->
				</div>
			</div>	
										
		</div>

<br>
<footer id="footer resources" class="p-4" style="background-color: rgba(0, 0, 0, 0.7);color:#fff;text-align:center">
    <div class="container-fluid" id="inner-footer" >
        <div class="row">
            <div class="col-md-2 row-col">
                <ul type="none"> 
                    <h4 style="color:white"><b>Timetable</b></h4>
                    <li><a href="./timetable.php" style="color:#89CFF0">View by Standard</a></li>
                </ul>
            </div>
            <div class="col-md-2 row-col">
                <ul type="none">
                    <h4 style="color:white"><b>Syllabus</b></h4>
                    <li><a href="./syllabus.php" style="color:#89CFF0">View by Standard</a></li>
                </ul>
            </div>
            <div class="col-md-2 row-col">
                <ul type="none">
                    <h4 style="color:white"><b>Explore</b></h4>
                    <li><a href="../index.php" style="color:#89CFF0">Homepage</a></li>
                    <li><a href="#!" style="color:#89CFF0">TEQIP III</a></li>
                    <li><a href="#!" style="color:#89CFF0">Training & Placements</a></li>
                </ul>
            </div>
            <div class="col-md-3 row-col">
                <ul type="none">
                    <h4 style="color:white"><b>Social Media Links</b></h4>
                    <li><a href="https://www.facebook.com/swaraj4715" style="color:#89CFF0">Facebook</a></li>
                    <li><a href="https://www.facebook.com/swaraj4715" style="color:#89CFF0">Instagram</a></li>
                    <li><a href="https://twitter.com/swaraj1729" style="color:#89CFF0">Twitter</a></li>
                </ul>
            </div>
            <div class="col-md-3 row-col">
                <ul type="none">
                    <h4 style="color:white"><b>Contact Us</b></h4>
                    <li style="color:white"><span>School Enterprise Resource Planning Platform, Yantromitra Solutions Private Limited</span></li><br>
                    <li><a href="https://goo.gl/maps/y3ZwTV9u2sweudjA6" target="_blank" style="color:#89CFF0"><span>Sikkim, Ravangla, Sikkim, India - 737139</span></a></li>
                    <li><a href="tel:+91 8002046457" style="color:#89CFF0"><span>+91 8002046457</span></a></li>
                    <li><a href="mailto:swarajkumarchaudhary1729@gmail.com" style="color:#89CFF0"><span>swarajkumarchaudhary1729@gmail.com</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright mb-3">
        <b>&copy; Swaraj Kumar Chaudhary (2021)</b>
    </div>
</footer>
        <br>
	</body>
</html>
		<style>

			td{
				vertical-align: middle !important;
			}
			td p{
				margin: unset
			}
			img{
				max-width:100px;
				max-height: :150px;
			}
		</style>
		<script>
			$(document).ready(function(){
				$('table').dataTable()
			})
		
			$('.edit_course').click(function(){
				uni_modal("Manage Course and Fees Entry","manage_course.php?id="+$(this).attr('data-id'),'large')

			})
			$('.delete_course').click(function(){
				_conf("Are you sure to delete this course?","delete_course",[$(this).attr('data-id')])
			})

			function delete_course($id){
				start_load()
				$.ajax({
					url:'ajax.php?action=delete_course',
					method:'POST',
					data:{id:$id},
					success:function(resp){
							alert_toast("Data successfully deleted",'success')
							setTimeout(function(){
								location.reload()
							},1500)
					}
				})
			}
		</script>
