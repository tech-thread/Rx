<style>
.page {
	width: 21.5cm;
	margin: 0 auto;
	/*font-size: 11px;*/
}
span.label-head {
    display: block;
    float: left;
    margin: 0 16px 0 0;
    /*margin-left:1cm*/
}
span.label-text {
    max-width: 65%;
}
.patientInfo {
    /*border-bottom: 1px solid;*/
    /*border-top: 1px solid;*/
    /*padding-bottom: 30px;*/
    /*padding-top: 10px;*/
    margin-top: 5.7cm;
}
.btn {
	padding: 8px 12px;
}
</style>
<script>
function myFunction() {
var sayfa = window.open('','','width=21.5cm,height=28cm');
sayfa.document.write(document.getElementById('print').innerHTML);
sayfa.print();
sayfa.document.close();
document.body.innerHTML = originalContents;

	}
</script>
<body>
<div id="print" class="page">
	<div class="doctorsInfo"></div>
	<div class="patientInfo">
		<div style="width:9cm;float:left;margin-left:1cm;">
			<p>
				<span class="label-head">Name:</span>
				<span class="label-text"><?php echo "Asaf Ud Doula Kollol"; ?></span>
			</p>
		</div>
		<div style="width:3.2cm;float:left;">
			<p>
				<span class="label-head">Age:</span>
				<span class="label-text"><?php echo "12"; ?></span>
			</p>
		</div>
		<div style="width:3.1cm;float:left;">
			<p>
				<span class="label-head">Wt:</span>
				<span class="label-text"><?php echo "45"; ?></span>
			</p>
		</div>
		<div style="width:5.1cm;float:left;">
			<p>
				<span class="label-head">Date:</span>
				<span class="label-text"><?php echo date("d/m/Y"); ?></span>
			</p>
		</div>
	</div>
</div>
<div class="buttonDiv">
	<button type="button" class="btn" onclick="myFunction()">Print this prescribtion</button>
</div>
</body>