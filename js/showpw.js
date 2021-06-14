<!-- Untuk show & hidden password -->
<script type="text/javascript">
function togglePassword(el) {
    // Checked State
    var checked = el.checked;
    if (checked) {
        // Changing type attribute
        document.getElementById("password").type = 'text';
        // Change the Text
        document.getElementById("toggleText").textContent = "Hide";
    } else {
        // Changing type attribute
        document.getElementById("password").type = 'password';
        // Change the Text
        document.getElementById("toggleText").textContent = "Show";
    }
}