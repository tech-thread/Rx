<style>
.patientinfo{
				
				margin-top: 58cm;
				border-top: 1px
				text-transform:uppercase;
				font-size:12px;
				}
.patientinfo h3{
				text-align:left;
				color:#040;
				}
.bod{
		border-bottom:#000 solid 1px;
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
<div class="patientinfo" id="print">
<p> Conveying meaning to assistive technologies
Using color to add meaning to a button only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text of the button), or is included through alternative means, such as additional text hidden with the .sr-only class.
</p>
</div>
<div class="patientinfo">
	<button type="button" class="btn btn-primary" onclick="myFunction()">Print this prescribtion</button>
</div>
</body>