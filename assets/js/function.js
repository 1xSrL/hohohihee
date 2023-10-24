<script>
    const followButton = document.getElementById("followButton");

    followButton.addEventListener("click", function() {
    if (followButton.textContent === "Follow") {
    followButton.textContent = "Following";
} else {
    followButton.textContent = "Follow";
}
});
</script>