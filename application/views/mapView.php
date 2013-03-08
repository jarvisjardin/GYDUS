<script type="text/javascript">
    var centreGot = false;
</script>
<?php echo $map[ 'js']; ?>
<section>
    <?php $this->load->helper('url'); if ($this->session->userdata('is_logged_in')) { ?>
   		 <br><br><br><br>
    <? }else{ ?>
   		 <br><br><br><br><br>
    <? }; ?>
    
    <section class="searchView hide" id="searchViewdisplay">
        <section class="findLocation alert alert-info">
            	<h3 class="h3-findlocationtitle">Find Location</h3>

            <section class="findLocation-Close">
                <button class="gydus-findL-btn btn  btn-danger pull-right clearfix" id="findLbtnX" type="button">X</button>
            </section>
            <!-- end of findLocation Close-->
        </section>
        <!-- end of findlocation-->
        <section class="searchkeyword">
        
            <form action="<?php echo base_url();?>index.php/mapController/search" method='get' class="form-search">
                <section class="gydus-kw-append input-append">
                    <input type="text" class="gydus-kw-search" name='searchLocation' placeholder="Search keyword or room">
                </section>
                <!-- end of input-append-->
                	<h3 class="searchOR">or</h3>

        </section>
        <!-- end of searchkeyword-->
        <section class="dropdownBuildings">
            <select name="buildingSelection" class="buildingSelect">
                <option>SELECT BUILDING</option>
                <option value="FS3">FS3</option>
                <option value="FS4">FS4</option>
            </select>
        </section>
        <!-- end fo dropdownBuildings-->
        <section class="poiTitleSection alert alert-info">
            	<h4 class="poiHeader ">Select Points of Interest</h4>

        </section>
        <section class="pointsofinterest">
            <section class="pointsofinterest1">
                <section name="poiSelection1" class="poiSelection btn-group" data-toggle="buttons-checkbox">
                   <input name="points[]" value="Patio" type="button checkbox" class="btn btn-default"/>
                   <input name="points[]" value="Food/Beverage" type="button checkbox" class="btn btn-default"/>
                    <input name="points[]" value="Restroom" type="button checkbox" class="btn btn-default"/><br>
                     <input name="points[]" value="Book Store" type="button checkbox" class="btn btn-default"/>
                    <input name="points[]" value="Library" type="button checkbox" class="btn btn-default"/>
                    <input name="points[]" value="Receptionist" type="button checkbox" class="btn btn-default"/>

                </section>
            </section>
            <!-- end of points of interst 1-->
          
        </section>
        <!-- end of points of interest-->
        <section class="findlocationBtns">
            <section class="suggestSpotbtn">
                <?php $this->load->helper('url'); if ($this->session->userdata('is_logged_in')){ ?>
                <a href="<?php echo base_url();?>index.php/mapController/suggestaspotView" class="btn btn-large btn-success btn-block">Suggest a Spot</a>
                <?php }else{ ?>
                <a href="<?php echo base_url();?>index.php/mapController/suggestaspotView" class="btn btn-large btn-success btn-block disabled">Suggest a Spot</a>
                <?php }; ?>
            </section>
            <!-- end of suggest spot btn-->
            <br>
            <section class="viewLocationbtn">
                <button class="btn btn-large btn-block btn-primary" type="submit">View Location</button>
            </section>
            <!-- end of view location btn-->
        </section>
        <!-- end of find location btns-->
        </form>
    </section>
    <!-- end of searchView-->
    <section class="findlocationButtonTop">
        	<h4 class="map-view-fL btn btn-large btn-block" id="map-viewFLbtn">Find Location  <i class="icon-chevron-down"></i></h4>

<<<<<<< HEAD
				</section><!-- end of findLocation Close-->
			</section><!-- end of findlocation-->
			
			<section class="searchkeyword">
				<form action="<?php echo base_url();?>index.php/mapController/search" method='post' class="form-search">
					<section class="gydus-kw-append input-append">
						<input type="text" class="gydus-kw-search" name='searchLocation' placeholder="Search keyword or room">
					</section><!-- end of input-append-->
						<h3 class="searchOR">or</h3>
					</section><!-- end of searchkeyword-->
		
			<section class="dropdownBuildings">
				<select class="buildingSelect">
					<option>SELECT BUILDING</option>
					<option>FS1</option>
					<option>FS2</option>
					<option>FS3</option>
					<option>FS4</option>
				</select>
			</section><!-- end fo dropdownBuildings-->
		
			<section class="poiTitleSection alert alert-info">
				<h4 class="poiHeader ">Select Points of Interest</h4>
			</section>
			
			<section class="pointsofinterest">
				<section class="pointsofinterest1">
				<section class="poiSelection btn-group" data-toggle="buttons-checkbox">
						<button type="button" class="btn btn-default">Patio</button>
						<button type="button" class="btn btn-default">Food/Beverage</button>
						<button type="button" class="btn btn-default">Library</button>
				</section>
				
				</section><!-- end of points of interst 1-->
				<section class="poinstofinterest2">
						<section class="poiSelection btn-group" data-toggle="buttons-checkbox">
								<button type="button" class="btn btn-default">Book Store</button>
								<button type="button" class="btn btn-default">Restroom</button>
								<button type="button" class="btn btn-default">Receptionist</button>
						</section>
				</section><!-- end of points of interst 2-->
			</section><!-- end of points of interest-->
=======
    </section>
    <!-- end of findlocatoinButtonTop-->
    <section class="navigationforms alert alert-info hide">
        <button type="button" id="closenav" class="close">&times;</button>
        	<h3 class="navTitle">Get Directions</h3>
>>>>>>> points of interest functionality

        <label>From Point A</label>
        <input type="text" name="pointa" placeholder="Point A" id="pointa">
        <br>
        <label>To Point B</label>
        <input type="text" name="pointb" placeholder="Point B" id="pointb">
        <br>
        <button class="getdirections btn btn-success btn-large btn-block">Get Directions</button>
    </section>
</section>	<span><?php if($this->session->flashdata('message')) {
						echo '<section id="sasPromptsuccess" class=" message alert alert-block alert-success">
';
						echo ''.$this->session->flashdata('message').'';


						echo'</section>';
						}?></span>

<section id="mapSpot" class="map-spot">
    <section id="map_canvas" class="mapCanvas pull-left" style="width:100%; height:100%">
        <?php echo $map[ 'html']; ?>
    </section>
</section>
<?php $this->load->view('templates/footer'); ?>
