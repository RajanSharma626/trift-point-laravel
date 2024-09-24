<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category | Admin</title>

    <!-- fave-icon  -->
    <link rel="shortcut icon" href="assets/images/icon/fave-icon.png" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/admin_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin_assets/css/responsive.css') }}">

</head>

<body>
    <div class="body-bg">
        <!-- NFTMax Admin Menu -->
        <x-sidebar pageId=2 />
        <!-- End NFTMax Admin Menu -->

        <!-- Start Header -->
        <x-navbar pageName="Category" />
        <!-- End Header -->

        <!-- NFTmax Dashboard -->
        <section class="nftmax-adashboard nftmax-show">


            <div class=" nftmax-adashboard-left ">
                <div class="row tabel-main-box">
                    <div class="col-12 text-end">
                        <a href="{{ route('admin.category.add') }}" class="btn btn-success text-center px-2 py-1">+
                            Add category</a>
                    </div>

                    <div class="col-lg-12">
                        <div class="tabel-main">
                            <table id="expendable-data-table" class="table display nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            Sno.
                                        </th>
                                        <th>
                                            Category
                                        </th>
                                        <th>
                                            Slug
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $sno = 1;
                                    @endphp
                                    @foreach ($data as $list)
                                        <tr>
                                            <td>{{ $sno }}</td>
                                            <td>{{ $list->category_name }}</td>
                                            <td>{{ $list->category_slug }}</td>
                                            <td>
                                                <a href="{{ url('/admin/category/edit') }}/{{ $list->id }}"
                                                    class="btn btn-primary text-black">Edit</a>

                                                @if ($list->status == 1)
                                                    <a href="{{ url('/admin/category/status/0') }}/{{ $list->id }}"
                                                       class="btn btn-success text-black">Active</a>
                                                @elseif($list->status == 0)
                                                    <a href="{{ url('/admin/category/status/1') }}/{{ $list->id }}"
                                                        class="btn btn-warning text-black">Deactive</a>
                                                @endif

                                                <a href="{{ url('/admin/category/delete') }}/{{ $list->id }}"
                                                    onclick="return confirm('Are you sure?')"
                                                    class="btn btn-danger text-black">Delete</a>
                                            </td>
                                        </tr>
                                        @php
                                            $sno++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End NFTmax Dashboard -->
    </div>

    <script src="{{ asset('admin_assets/assets/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/chart.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/modeControl.js') }}"></script>

</body>

</html>
