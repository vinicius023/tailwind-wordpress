

	</div> <!-- /.container -->

	<footer class="blog-footer">
		<p></p>
		<p><a href="#">Back to top</a></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
        new Vue({
            el: '#header',
            data: {
                open: false,
            },
            methods: {
                toggle() {
                    this.open = !this.open
                }
            }
        })
    </script>

<?php wp_footer(); ?>
</body>
</html>