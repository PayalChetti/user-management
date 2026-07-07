<x-app-layout>

    <div class="container py-4">


        <div class="row">

            <!-- Total Users -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <h5 class="text-secondary">👥 Total Users</h5>
                        <h1 class="display-5 fw-bold text-primary">{{ $totalUsers }}</h1>
                    </div>
                </div>
            </div>

            <!-- Total Admins -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <h5 class="text-secondary">👑 Admins</h5>
                        <h1 class="display-5 fw-bold text-success">{{ $totalAdmins }}</h1>
                    </div>
                </div>
            </div>

            <!-- Normal Users -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <h5 class="text-secondary">🙋 Normal Users</h5>
                        <h1 class="display-5 fw-bold text-danger">{{ $totalNormalUsers }}</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-4">
            <a href="{{ route('users.index') }}" class="btn btn-primary btn-lg">
                Manage Users
            </a>
        </div>

    </div>

</x-app-layout>
