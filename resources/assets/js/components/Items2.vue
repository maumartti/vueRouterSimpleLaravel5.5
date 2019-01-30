<template>
	<div class="inner-pages">
	    <div class="container">
	    	<!--
	        <h2>probrando vue2 HOME 2</h2>
	        <router-link to="/home">HOME </router-link>
	        <router-link to="/home3">HOME 3</router-link>
			-->
			<nav class="nav nav-pills nav-fill">
			  <a class="nav-item nav-link active" href="#"><span>1</span> Paso</a>
			  <a class="nav-item nav-link" href="#"><span>2</span> Paso</a>
			  <a class="nav-item nav-link" href="#"><span>3</span> Paso</a>
			  <a class="nav-item nav-link" href="#"><span>4</span> Paso</a>
			</nav>
	        <div class="property-form-group">
	            <div class="row ">
	                <div class="col-md-12">
	                    <p>
	                        <label for="description">Property Description</label>
	                        <textarea id="description" name="pro-dexc" placeholder="Describe about your property"></textarea>
	                    </p>
	                </div>
	            </div>
	        </div>


	    </div>
	</div>	    
</template>

<script>
    export default {

    }

</script>
<style scoped>
 .nav-link{
 	background-color: #e6e6e6;
 	border:1px solid white;
 }
 .nav > a{
 	text-align: left;
 }
 .nav > a > span{
 	background: white;
	color: #014c8c;
	border-radius: 100%;
	padding: 4px 9px;
	margin-right: 5px;
 }
@media screen and (max-width: 400px){
	#app > .container{
		padding-left: 0px !important;
		padding-right: 0px !important;
	}
} 
</style>