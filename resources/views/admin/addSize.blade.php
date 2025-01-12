<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Size | Admin</title>

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
        <x-sidebar pageId=4 />
        <!-- End NFTMax Admin Menu -->

        <!-- Start Header -->
        <x-navbar pageName="Add Size" />
        <!-- End Header -->

        <!-- NFTmax Dashboard -->
        <section class="nftmax-adashboard nftmax-show">
            <div class=" nftmax-adashboard-left ">
                <div class="row tabel-main-box">
                    <div class="col-12 text-end">
                        <a href="{{ route('admin.size') }}" class="btn btn-warning text-center px-2 py-1">Back
                        </a>
                    </div>
                    <div class="col-lg-12">
                        <form action="{{ route('admin.size.manage') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6 mb-3">
                                    <label for="" class="form-label">Size</label>
                                    <input type="text" name="size" id=""
                                        value="{{ $size }}" class="form-control py-2"
                                        placeholder="Enter Size">
                                    @if ($errors->has('size'))
                                        <span class="text-danger ps-2">{{ $errors->first('size') }}</span>
                                    @endif
                                </div>
                                
                                <input type="hidden" name="id" value="{{ $id }}">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="submit" value="Submit" class="btn-success btn text-center">
                            </div>
                        </form>
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



    <!-- chart-js  -->

    <script>
        let darkMode = JSON.parse(localStorage.getItem("darkMode"))

        function totalEarn() {
            const ctx_bids = document.getElementById("totalEarn").getContext("2d");
            const bitsMonth = [
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Feb",
                "Mar",
                "Afril",
                "May",
            ];
            const bitsData = [
                0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
            ];
            const totalEarn = new Chart(ctx_bids, {
                type: "line",
                data: {
                    labels: bitsMonth,
                    datasets: [{
                        label: "Visitor",
                        data: bitsData,
                        backgroundColor: () => {
                            const chart = document
                                .getElementById("totalEarn")
                                .getContext("2d");
                            const gradient = chart.createLinearGradient(0, 0, 0, 450);
                            gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                            gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");

                            return gradient;
                        },
                        borderColor: "#22C55E",
                        pointRadius: 0,
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#22C55E",
                        borderWidth: 1,
                        fill: true,
                        fillColor: "#fff",
                        tension: 0.4,
                    }, ],
                },
                options: {
                    layout: {
                        padding: {
                            bottom: -20,
                        },
                    },
                    maintainAspectRatio: false,
                    responsive: true,
                    scales: {
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                        y: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                    },

                    plugins: {
                        legend: {
                            position: "top",
                            display: false,
                        },
                        title: {
                            display: false,
                            text: "Visitor: 2k",
                        },
                        tooltip: {
                            enabled: false,
                        },
                    },
                },
            });
        }
        totalEarn();

        function totalSpendingChart() {
            let ctx_bids = document
                .getElementById("totalSpending")
                .getContext("2d");
            let bitsMonth = [
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Feb",
                "Mar",
                "Afril",
                "May",
            ];
            let bitsData = [
                0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
            ];
            let totalEarn = new Chart(ctx_bids, {
                type: "line",
                data: {
                    labels: bitsMonth,
                    datasets: [{
                        label: "Visitor",
                        data: bitsData,
                        backgroundColor: () => {
                            const chart = document
                                .getElementById("totalEarn")
                                .getContext("2d");
                            const gradient = chart.createLinearGradient(0, 0, 0, 450);
                            gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                            gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");

                            return gradient;
                        },
                        borderColor: "#22C55E",
                        pointRadius: 0,
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#22C55E",
                        borderWidth: 1,
                        fill: true,
                        fillColor: "#fff",
                        tension: 0.4,
                    }, ],
                },
                options: {
                    layout: {
                        padding: {
                            bottom: -20,
                        },
                    },
                    maintainAspectRatio: false,
                    responsive: true,
                    scales: {
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                        y: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                    },

                    plugins: {
                        legend: {
                            position: "top",
                            display: false,
                        },
                        title: {
                            display: false,
                            text: "Visitor: 2k",
                        },
                        tooltip: {
                            enabled: false,
                        },
                    },
                },
            });
        }
        totalSpendingChart();

        function totalGoal() {
            let ctx_bids = document.getElementById("totalGoal").getContext("2d");
            let bitsMonth = [
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Feb",
                "Mar",
                "Afril",
                "May",
            ];
            let bitsData = [
                0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
            ];
            let totalEarn = new Chart(ctx_bids, {
                type: "line",
                data: {
                    labels: bitsMonth,
                    datasets: [{
                        label: "Visitor",
                        data: bitsData,
                        backgroundColor: () => {
                            const chart = document
                                .getElementById("totalGoal")
                                .getContext("2d");
                            const gradient = chart.createLinearGradient(0, 0, 0, 450);
                            gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                            gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");
                            console.log({
                                gradient
                            })
                            return gradient;
                        },
                        borderColor: "#22C55E",
                        pointRadius: 0,
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#22C55E",
                        borderWidth: 1,
                        fill: true,
                        fillColor: "#fff",
                        tension: 0.4,
                    }, ],
                },
                options: {
                    layout: {
                        padding: {
                            bottom: -20,
                        },
                    },
                    maintainAspectRatio: false,
                    responsive: true,
                    scales: {
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                        y: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                    },

                    plugins: {
                        legend: {
                            position: "top",
                            display: false,
                        },
                        title: {
                            display: false,
                            text: "Visitor: 2k",
                        },
                        tooltip: {
                            enabled: false,
                        },
                    },
                },
            });
        }
        totalGoal();

        let revenueFlowElement = document
            .getElementById("revenueFlow")
            .getContext("2d");
        let month = [
            "Jan",
            "Feb",
            "Mar",
            "April",
            "May",
            "Jun",
            "July",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ];
        let dataSetsLight = [{
                label: "My First Dataset",
                data: [1, 5, 2, 2, 6, 7, 8, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(250, 204, 21, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
            {
                label: "My First Dataset 2",
                data: [5, 2, 4, 2, 5, 8, 3, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(255, 120, 75, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
            {
                label: "My First Dataset 3",
                data: [2, 5, 3, 2, 5, 6, 9, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(74, 222, 128, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
        ];
        let dataSetsDark = [{
                label: "My First Dataset",
                data: [1, 5, 2, 2, 6, 7, 8, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(250, 204, 21, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
            {
                label: "My First Dataset 2",
                data: [5, 2, 4, 2, 5, 8, 3, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(255, 120, 75, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
            {
                label: "My First Dataset 3",
                data: [2, 5, 3, 2, 5, 6, 9, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(74, 222, 128, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
        ];
        let revenueFlow = new Chart(revenueFlowElement, {
            type: "bar",
            data: {
                labels: month,
                datasets: dataSetsLight,
            },
            options: {
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: "rgb(243 ,246, 255 ,1)",
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            callback(value) {
                                return `${value}% `;
                            },
                        },
                    },
                    x: {
                        grid: {
                            color: "rgb(243 ,246, 255 ,1)",
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true,
                },
            },
        });
        //pie chart
        let pieChart = document.getElementById("pie_chart").getContext("2d");

        const data = {
            labels: [10, 20, 30],
            datasets: [{
                label: "My First Dataset",
                data: [15, 20, 35, 40],
                backgroundColor: ["#1A202C", "#61C660", "#F8CC4B", "#EDF2F7"],
                borderColor: ["#ffffff", "#ffffff", "#ffffff", "#1A202C"],
                hoverOffset: 18,
                borderWidth: 0,
            }, ],
        };
        const customDatalabels = {
            id: "customDatalabels",
            afterDatasetsDraw(chart, args, pluginOptions) {
                const {
                    ctx,
                    data,
                    chartArea: {
                        top,
                        bottom,
                        left,
                        right,
                        width,
                        height
                    },
                } = chart;
                ctx.save();
                data.datasets[0].data.forEach((datapoint, index) => {
                    const {
                        x,
                        y
                    } = chart
                        .getDatasetMeta(0)
                        .data[index].tooltipPosition();
                    ctx.font = "bold 12px sans-serif";
                    ctx.fillStyle = data.datasets[0].borderColor[index];
                    ctx.textAlign = "center";
                    ctx.textBaseline = "middle";
                    ctx.fillText(`${datapoint}%`, x, y);
                });
            },
        };
        const config = {
            type: "doughnut",
            data,
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 10,
                        top: 10,
                        bottom: 10,
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
            plugins: [customDatalabels],
        };

        let pieChartConfiig = new Chart(pieChart, config);

        //chart dark mode




        //Theme controll 

        if (darkMode) {
            document.getElementById("dark-icon").style.setProperty("display", "block")
            document.getElementById("light-icon").style.setProperty("display", "none")
            document.getElementsByClassName("logo")[0].style.setProperty("display", "none")
            document.getElementsByClassName("logo-dark")[0].style.setProperty("display", "block")
            modeSetup(darkMode)
        } else {
            document.getElementById("dark-icon").style.setProperty("display", "none")
            document.getElementById("light-icon").style.setProperty("display", "block")
            document.getElementsByClassName("logo")[0].style.setProperty("display", "block")
            document.getElementsByClassName("logo-dark")[0].style.setProperty("display", "none")
            modeSetup(darkMode)
        }





        //onclick

        function updateRevFlow() {

            if (darkMode) {
                revenueFlow.data.datasets = dataSetsDark;
                revenueFlow.options.scales.y.ticks.color = 'white';
                revenueFlow.options.scales.x.ticks.color = 'white';
                revenueFlow.options.scales.x.grid.color = '#222429';
                revenueFlow.options.scales.y.grid.color = '#222429';
                revenueFlow.update();
            } else {
                revenueFlow.data.datasets = dataSetsLight;
                revenueFlow.options.scales.y.ticks.color = 'black';
                revenueFlow.options.scales.x.ticks.color = 'black';
                revenueFlow.options.scales.x.grid.color = 'rgb(243 ,246, 255 ,1)';
                revenueFlow.options.scales.y.grid.color = 'rgb(243 ,246, 255 ,1)';
                revenueFlow.update();
            }
        }
        updateRevFlow()
        document.getElementById("theme-controll").addEventListener("click", event => {
            darkMode = !darkMode
            localStorage.setItem("darkMode", darkMode)
            updateRevFlow()
            const main = document.querySelector("html")

            modeSetup(darkMode)
        })
    </script>

</body>

</html>
