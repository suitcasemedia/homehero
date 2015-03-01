<section class="success" >

<div class="container">



		

		


	
	<h4> Admin panel ...... Logged in only....... </h4>

<br />
<hr>

<h5> Create a new order </h5>
<br>
<div class="form-section " >
        
		<form id="randomInsert" action="<?php echo URL; ?>admin/xhrInsert" method="post">
          <div class="row ">
            <div class="nomargin col-md-2">
              <div class="form-group ">
                <input placeholder="Name" class="edit-btn-large form-control" type="text" name="name" value="" />
              </div><!-- /.form-group   -->
            </div><!-- /.nomargin col-md-2-->
          <div class="nomargin col-md-2">
           <div class=" form-group ">
             <input  type="email" name="email"  class=" edit-btn-large form-control" placeholder="email" value="">
           </div><!-- /.form-group   -->
          </div><!-- /.nomargin col-md-2-->


          
            <div class="nomargin col-md-2">
              <div class="form-group "  >
                <input  placeholder="Mobile" class="edit-btn-large form-control" type="text" name="phone" value="">
               </div><!-- /.form-group   -->
            </div><!-- /.nomargin col-md-1-->



          
            <div class="nomargin col-md-2">
              <div class="form-group "  >
                <input  placeholder="Postcode" class="edit-btn-large form-control" type="text" name="postcode" value="">
               </div><!-- /.form-group   -->
            </div><!-- /.nomargin col-md-1-->




            <div class="nomargin col-md-3">
              <div class="form-group "  >
                <input  placeholder="Address" class="edit-btn-large form-control" type="text" name="address" value="">
               </div><!-- /.form-group   -->
            </div><!-- /.nomargin col-md-1-->






            <div class="nomargin col-md-10">
              <div class="form-group "  >
                <input  placeholder="Sumary" class="edit-btn-large form-control" type="text" name="summary" value="">
               </div><!-- /.form-group   -->
            </div><!-- /.nomargin col-md-1-->




<div class="nomargin col-md-2">
              <div class="form-group "  >

		  <input  class="btn btn-lg btn-primary" type="submit" />
		   
               </div><!-- /.form-group   -->
            </div><!-- /.nomargin col-md-1-->

		</form>
            <!-- post code section -->


				
        


              
          </div><!-- /.form-section -->




<hr>



        <div id="about">
<div id="listInserts">
	<h4> All orders </h4>
	<table class="table table-bordered " id="list">
		<tr>
			<th>
				Id
			</th>
			<th>
			Date & time
			</th>
			<th>
				Name
			</th>
			<th>
				Email
			</th>
			
			<th>
				Phone
			</th>
			<th>
				Postcode
			</th>
			<th>
				Address 
			</th> 
			<th>
				Summary of emergency
			</th>
			<th>
				Action
			</th>

		</tr>
		<tbody>
	</table>


	</div>
	</div>

</div>


</section>