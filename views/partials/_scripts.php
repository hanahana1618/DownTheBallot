        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/emodal.js"></script>

    </body>
</html>

<script>
$("#healthcare-button").click(function () {
    var options = {
			url: "modals/healthcare.html",
			title:'Healthcare',
			size: 'xl',
			subtitle: 'Login is required to add new events, attend an event, etc.'
	};
	eModal.ajax(options);
});
</script>