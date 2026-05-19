<?php
// Footer
?>
<footer class="bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">
                    <i class="fas fa-dumbbell"></i> FlowGym
                </h5>
                <p class="text-muted">
                    Qendra moderna e fitnesi me trajnerë profesionistë dhe ambient motivues.
                </p>
                <div class="social-icons mt-3">
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-muted text-decoration-none">Home</a></li>
                    <li><a href="pages/about.php" class="text-muted text-decoration-none">About</a></li>
                    <li><a href="pages/contact.php" class="text-muted text-decoration-none">Contact</a></li>
                    <li><a href="pages/register.php" class="text-muted text-decoration-none">Register</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Contact Us</h5>
                <p class="text-muted">
                    <i class="fas fa-phone"></i> +383 38 123 456<br>
                    <i class="fas fa-envelope"></i> info@flowgym.com<br>
                    <i class="fas fa-map-marker-alt"></i> Prishtinë, Kosovë
                </p>
            </div>
        </div>
        
        <!-- Divider -->
        <hr class="bg-secondary">
        
        <!-- Copyright -->
        <div class="text-center text-muted">
            <p>&copy; 2026 FlowGym. Të gjitha të drejtat e rezervuara.</p>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Custom JS -->
<script src="<?php echo isset($base_url) ? $base_url : ''; ?>assets/js/script.js"></script>

</body>
</html>
