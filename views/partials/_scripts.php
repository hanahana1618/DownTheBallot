        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/emodal.js"></script>

        <script>
        $("#healthcare-button").click(function () {
            var options = {
                    url: "http://192.241.139.22/modals/healthcare.php",
                    title:'Healthcare',
                    size: 'xl',
                    subtitle: 'Login is required to add new events, attend an event, etc.'
            };
            eModal.ajax(options);
        });
        </script>

    </body>
</html>

