<x-layout>

<div class="container py-md-5">
    <div class="row align-items-center">
        <div class="col-lg-7 py-3 py-md-5">
            <h1 class="display-3">Love Vinyl?</h1>
            <p class="lead text-muted">You are not alone. Vinyl records have seen a resurence in popularity in recent years. The warm rich sounds of vinyl are once again filling millions of homes around the world. Share your love vinyl with others, discuss releases both new and old. Shar your love of vinyls with others!</p>
        </div>
        <div class="col-lg-5 pl-lg-5 pb-3 py-lg-5">
            <form action="/register" method="POST" id="registration-form">
                @csrf
                <div class="form-group">
                    <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
                    <input name="username" id="username-register" class="form-control" type="text" placeholder="Pick a username" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
                    <input name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
                    <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />
                </div>

                <div class="form-group">
                    <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
                    <input name="password" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />
                </div>

                <button type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Sign up for OurApp</button>
            </form>
        </div>
    </div>
</div>
</x-layout>
