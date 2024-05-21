@extends('component.layout') @section('title') Log In Page @endsection
@section('script')
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>

<script type="text/javascript">
    window.onload = () => {
        $("#message_modal").modal("show");
    };
</script>
@endsection @section('content')
<section
    class="py-3 py-md-5 wv-100 hv-100"
    style="background-color: #c4c3c4; height: 100vh"
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div
                    class="card border border-light-subtle rounded-3 shadow-sm"
                >
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="text-center mb-3">
                            <a href="/">
                                <img
                                    src="{{
                                        asset('assets/logo ori UTHM.png')
                                    }}"
                                    alt="UTHM Logo"
                                    width="175"
                                    height="57"
                                />
                            </a>
                        </div>
                        <h2
                            class="fs-6 fw-normal text-center text-secondary mb-4"
                        >
                            Sign in to your account Test
                        </h2>

                        <form
                            action="{{ route('authenticate') }}"
                            method="post"
                        >
                            @csrf
                            <div class="row gy-2 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            id="email"
                                            placeholder="name@example.com"
                                            required
                                        />
                                        <label for="email" class="form-label"
                                            >Email</label
                                        >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
                                            id="password"
                                            value=""
                                            placeholder="Password"
                                            required
                                        />
                                        <label for="password" class="form-label"
                                            >Password</label
                                        >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div
                                        class="d-flex gap-2 justify-content-between"
                                    >
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                value=""
                                                name="rememberMe"
                                                id="rememberMe"
                                            />
                                            <label
                                                class="form-check-label text-secondary"
                                                for="rememberMe"
                                            >
                                                Keep me logged in
                                            </label>
                                        </div>
                                        <a
                                            href="#!"
                                            class="link-primary text-decoration-none"
                                            >Forgot password?</a
                                        >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <button
                                            class="btn btn-lg text-light"
                                            type="submit"
                                            style="background-color: #312783"
                                        >
                                            Log in
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="m-0 text-secondary text-center">
                                        Don't have an account?
                                        <a
                                            href="{{ route('register') }}"
                                            class="link-primary text-decoration-none"
                                            >Sign up</a
                                        >
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
