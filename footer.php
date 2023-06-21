<script>
    var scrollToTopBtn = document.querySelector(".scroll-to-top");

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 100) {
            scrollToTopBtn.classList.add("show");
        } else {
            scrollToTopBtn.classList.remove("show");
        }
    });

    scrollToTopBtn.addEventListener("click", function (e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
</div>
</body>
</html>