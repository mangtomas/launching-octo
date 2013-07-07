    <div id="footer">
            <strong>crackerjack</strong><br />
            web development startup company<br />
            &copy; 2013
        </div>
    </div>
    <br style="clear:both" />
</div>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-transition.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-alert.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-modal.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-dropdown.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-scrollspy.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-tab.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-tooltip.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-popover.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-button.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-collapse.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-carousel.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-typeahead.js"></script>
    <script src="<?=base_url('public');?>/admin/js/bootstrap-datepicker.js"></script>
    <script src="<?=base_url('public');?>/admin/js/prettify/prettify.js"></script>
    <script src="<?=base_url('public');?>/admin/js/jmethods.js"></script>
    <script src="<?=base_url('public');?>/admin/js/jquery.alphanumeric.js"></script>
    <script src="<?=base_url('public');?>/admin/js/jquery.form.js"></script>
    <script src="<?=base_url('public');?>/admin/js/jquery.validate.js"></script>
    <script src="<?=base_url('public');?>/admin/js/generals.js"></script>
    <script src="<?=base_url('public');?>/admin/js/clock.js"></script>
    <script src="<?=base_url('public');?>/admin/js/excanvas.js"></script>
    <script src="<?=base_url('public');?>/admin/js/jquery.flot.js"></script>
    <script src="<?=base_url('public');?>/admin/js/jquery.flot.pie.js"></script>
    <script src="<?=base_url('public');?>/admin/js/jquery.flot.resize.min.js"></script>
    <script src="<?=base_url('public');?>/admin/js/jquery.flot.stack.js"></script>
    <script type="text/javascript">
		var currenttime = '<?=date("F d, Y H:i:s")?>';
		var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
		var serverdate=new Date(currenttime)
		 
		function padlength(what){
		var output=(what.toString().length==1)? "0"+what : what
		return output
		}
		 
		function displaytime(){
		serverdate.setSeconds(serverdate.getSeconds()+1)
		var datestring=montharray[serverdate.getMonth()]+" "+padlength(serverdate.getDate())+", "+serverdate.getFullYear()
		var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
		var ampm = ((serverdate.getHours()+12)>=13) ? 'PM' : 'AM';
		document.getElementById("servertime").innerHTML=datestring+" "+timestring+" "+ampm
		}

		window.onload=function(){
		setInterval("displaytime()", 1000)
		}
	</script>

</body>
</html>