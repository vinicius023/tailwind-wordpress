

	</div> <!-- /.container -->

	<footer class="blog-footer">
		<p></p>
		<p><a href="#">Back to top</a></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- versão de desenvolvimento, inclui aviso úteis no console  -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        new Vue({
            el: '#app',
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