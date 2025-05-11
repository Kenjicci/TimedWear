<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: white;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .navbar {
            background-color: #2470dc !important;
        }
        
        .registration-container {
            max-width: 500px;
            width: 100%;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .registration-header {
            text-align: center;
            margin-bottom: 2rem;
            color: #333;
        }
        
        .form-label {
            font-weight: 500;
            color: #555;
        }
        
        .form-control:focus {
            border-color: #2470dc;
            box-shadow: 0 0 0 0.25rem rgba(36, 112, 220, 0.25);
        }
        
        .btn-primary {
            background-color: #2470dc;
            border-color: #2470dc;
            width: 100%;
            padding: 0.6rem;
            margin-top: 1rem;
            font-weight: 500;
        }
        
        .btn-primary:hover, .btn-primary:focus {
            background-color: #1b5db9;
            border-color: #1b5db9;
        }
        
        .registration-footer {
            text-align: center;
            margin-top: 1.5rem;
        }
        
        .registration-footer a {
            color: #2470dc;
            text-decoration: none;
        }
        
        .registration-footer a:hover {
            text-decoration: underline;
        }
        
        .password-requirements {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="registration-container">
                    <div class="registration-header">
                        <h2>Create an Account</h2>
                        <p class="text-muted">Fill in your details to get started</p>
                    </div>
                    
                    <form action="registration_process.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <div class="password-requirements">
                                Password must be at least 8 characters long and include letters and numbers
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="termsAgree" required>
                            <label class="form-check-label" for="termsAgree">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">
                            Create Account
                        </button>
                    </form>
                    
                    <div class="registration-footer">
                        <p>Already have an account? <a href="login.html">Log in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>