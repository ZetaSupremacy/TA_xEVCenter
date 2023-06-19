<div>
    @if (session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="col-md-12 mt-3">
        <div class="card pb-3" style="background-color: #c3c3c3">
            <div
                class="si-card mt-4"
                style=" background-color: #ffffff;
                        border: 15px solid;
                        border-color: #c3c3c3;"
            >
                <h3 style="font-weight: bold">&nbsp;System Information</h3>

                <div
                    class="si-card-body1 d-flex align-items-center px-2"
                    style=" border: 1px solid black;
                            margin: 10px"
                >
                    <h5 class="pt-2" style="flex: 1">Allow Days</h5>
                    <table
                        class="px-3 mt-2"
                        style="float: right; border-left: 1px solid black"
                    >
                        <tr>
                            <th
                                style="
                                    border-left: 1px solid black;
                                    padding-left: 15px;
                                    padding-right: 15px;
                                    color: red;
                                "
                            >
                                S
                            </th>
                            <th
                                style="
                                    border-left: 1px solid black;
                                    padding-left: 15px;
                                    padding-right: 15px;
                                    color: red;
                                "
                            >
                                M
                            </th>
                            <th
                                style="
                                    border-left: 1px solid black;
                                    padding-left: 15px;
                                    padding-right: 15px;
                                    color: green;
                                "
                            >
                                T
                            </th>
                            <th
                                style="
                                    border-left: 1px solid black;
                                    padding-left: 15px;
                                    padding-right: 15px;
                                    color: red;
                                "
                            >
                                W
                            </th>
                            <th
                                style="
                                    border-left: 1px solid black;
                                    padding-left: 15px;
                                    padding-right: 15px;
                                    color: green;
                                "
                            >
                                T
                            </th>
                            <th
                                style="
                                    border-left: 1px solid black;
                                    padding-left: 15px;
                                    padding-right: 15px;
                                    color: red;
                                "
                            >
                                F
                            </th>
                            <th
                                style="
                                    border-left: 1px solid black;
                                    padding-left: 15px;
                                    padding-right: 15px;
                                    color: red;
                                "
                            >
                                S
                            </th>
                        </tr>
                    </table>
                </div>

                <div
                    class="si-card-body1 d-flex align-items-center px-2 mt-2 pt-2"
                    style="border: 1px solid black;
                            margin: 10px"
                >
                    <h5 style="flex: 1">Date Interval</h5>
                    <h5 style="float: right">10</h5>
                </div>

                <div
                    class="si-card-body1 d-flex align-items-center px-2 mt-2 pt-2"
                    style="border: 1px solid black;
                            margin: 10px"
                >
                    <h5 style="flex: 1">Quota / Session</h5>
                    <h5 style="float: right">20</h5>
                </div>

                <!-- <div
                    class="si-card-body1 d-flex align-items-center px-2 mt-2 mb-3 pt-2"
                    style="border: 1px solid black;
                            margin: 10px"
                >
                    <h5 style="flex: 1">Day Off</h5>
                    <h5 style="float: right">
                        ini coba coba ajah klo gak butuh di apus ajh
                    </h5>
                </div> -->
            </div>
                
            <div
                class="card-body d-flex align-items-center mt-1"
                style="
                    background-color: #ffffff;
                    border: 15px solid;
                    border-color: #c3c3c3;
                "
            >
                <h4 style="font-weight: bold; flex: 1">Allow Days</h4>
                <button
                    class="btn btn-primary flex-center px-5 mx-2 border-radius-8 btn-sm"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#allowDays"
                    id="submit-reservation"
                    style="
                        background-color: #fe8f50;
                        color: white;
                        font-weight: bold;
                        float: right;
                    "
                >
                    Edit
                </button>
            </div>
            <div
                class="card-body d-flex align-items-center mt-1"
                style="
                    background-color: #ffffff;
                    border: 15px solid;
                    border-color: #c3c3c3;
                "
            >
                <h4 style="font-weight: bold; flex: 1">Date Interval</h4>
                <button
                    class="btn btn-primary flex-center px-5 mx-2 border-radius-8 btn-sm"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#dateInterval"
                    id="submit-reservation"
                    style="
                        background-color: #fe8f50;
                        color: white;
                        font-weight: bold;
                        float: right;
                    "
                >
                    Edit
                </button>
            </div>
            <div
                class="card-body d-flex align-items-center mt-1"
                style="
                    background-color: #ffffff;
                    border: 15px solid;
                    border-color: #c3c3c3;
                "
            >
                <h4 style="font-weight: bold; flex: 1">Quota</h4>
                <button
                    class="btn btn-primary flex-center px-5 mx-2 border-radius-8 btn-sm"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#kuota"
                    id="submit-reservation"
                    style="
                        background-color: #fe8f50;
                        color: white;
                        font-weight: bold;
                        float: right;
                    "
                >
                Edit
            </button>
        </div>
            <div
                class="card-body d-flex align-items-center mt-1"
                style="
                    background-color: #ffffff;
                    border: 15px solid;
                    border-color: #c3c3c3;
                "
            >
                <h4 style="font-weight: bold; flex: 1">Session</h4>
                <button
                    class="btn btn-primary flex-center px-5 mx-2 border-radius-8 btn-sm"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#session"
                    id="submit-reservation"
                    style="
                        background-color: #fe8f50;
                        color: white;
                        font-weight: bold;
                        float: right;
                    "
                >
                    Edit
                </button>
        </div>
            <div
                class="card-body d-flex align-items-center mt-1"
                style="
                    background-color: #ffffff;
                    border: 15px solid;
                    border-color: #c3c3c3;
                "
            >
                <h4 style="font-weight: bold; flex: 1">Day Off</h4>
                <button
                    class="btn btn-primary flex-center px-5 mx-2 border-radius-8 btn-sm"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#kuota"
                    id="submit-reservation"
                    style="
                        background-color: #fe8f50;
                        color: white;
                        font-weight: bold;
                        float: right;
                    "
                >
                    Edit
                </button>
            </div>
            <div
                class="hi-card mt-4"
                style=" background-color: #ffffff;
                        border: 15px solid black;
                        border-color: #c3c3c3;"
            >
                <h3 style="font-weight: bold">&nbsp;&nbsp;System History</h3>
                <div class="hi-card-body2 d-flex align-items-center px-2">
                    <table
                        class="col-md-12 px-2 mt-2"
                        style="float: right; border-bottom: 1px solid black"
                    >
                        <tr>
                            <th style="border-bottom: 1px solid black">Date</th>
                            <th style="border-bottom: 1px solid black">
                                Description
                            </th>
                        </tr>
                        <tr>
                            <td style="padding-right: 35px">Text 1</td>
                            <td>Text 2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div
        wire:ignore
        class="modal fade"
        id="allowDays"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Allow Days
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="card" style="background-color: #c3c3c3">
                            <form action="/allow_days" method="post">
                                @csrf
                                <div class="card-body mx-3 form-group">
                                    <input
                                        wire:model.lazy="memek"
                                        type="text"
                                        id="skill"
                                        name="allow_days"
                                        class="form-control"
                                    />
                                </div>
                                <div class="px-4 mb-3 mt-3">
                                    <button
                                        class="btn btn-primary flex-center py-1 px-4 border-radius-8 btn-sm"
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                        style="
                                            background-color: #acbcb0;
                                            color: black;
                                            font-weight: bold;
                                            float: left;
                                        "
                                    >
                                        Back
                                    </button>
                                    <button
                                        class="btn btn-primary flex-center px-4 mx-2 border-radius-8 btn-sm"
                                        type="submit"
                                        id="submit-reservation"
                                        data-bs-dismiss="modal"
                                        style="
                                            background-color: #00ce2d;
                                            color: white;
                                            font-weight: bold;
                                            float: right;
                                        "
                                    >
                                        Save & Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        wire:ignore
        class="modal fade"
        id="dateInterval"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Date Interval
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="card" style="background-color: #c3c3c3">
                            <div class="card-body mx-3 pb-0">
                                <h6>Interval Dalam Hari</h6>
                            </div>
                            <form wire:submit.prevent="updateDateInterval">
                                <div class="card-body mx-3 pt-0">
                                    <input
                                        wire:model.lazy="dateInterval"
                                        type="text"
                                        class="form-control"
                                        placeholder="Masukkan Interval Hari Misal : 10"
                                        aria-label="Username"
                                        aria-describedby="addon-wrapping"
                                    />
                                </div>
                                {{-- @dd($dateInterval) --}}
                                <div class="px-4 mb-3 mt-3">
                                    <button
                                        class="btn btn-primary flex-center py-1 px-4 border-radius-8 btn-sm"
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                        style="
                                            background-color: #acbcb0;
                                            color: black;
                                            font-weight: bold;
                                            float: left;
                                        "
                                    >
                                        Back
                                    </button>
                                    <button
                                        class="btn btn-primary flex-center px-4 mx-2 border-radius-8 btn-sm"
                                        type="submit"
                                        id="submit-reservation"
                                        data-bs-dismiss="modal"
                                        style="
                                            background-color: #00ce2d;
                                            color: white;
                                            font-weight: bold;
                                            float: right;
                                        "
                                    >
                                        Save & Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        wire:ignore
        class="modal fade"
        id="kuota"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Kuota
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="card" style="background-color: #c3c3c3">
                            <form wire:submit.prevent="updateKuota">
                                <div class="card-body mx-3">
                                    <input
                                        type="text"
                                        wire:model.lazy="kuota"
                                        class="form-control"
                                        placeholder="Masukkan Jumlah Quota Misal : 20"
                                        aria-label="Username"
                                        aria-describedby="addon-wrapping"
                                    />
                                </div>
                                <div class="px-4 mb-3 mt-3">
                                    <button
                                        class="btn btn-primary flex-center py-1 px-4 border-radius-8 btn-sm"
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                        style="
                                            background-color: #acbcb0;
                                            color: black;
                                            font-weight: bold;
                                            float: left;
                                        "
                                    >
                                        Back
                                    </button>
                                    <button
                                        class="btn btn-primary flex-center px-4 mx-2 border-radius-8 btn-sm"
                                        type="submit"
                                        id="submit-reservation"
                                        data-bs-dismiss="modal"
                                        style="
                                            background-color: #00ce2d;
                                            color: white;
                                            font-weight: bold;
                                            float: right;
                                        "
                                    >
                                        Save & Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#skill").tokenfield({
            autocomplete: {
                source: [
                    "Senin",
                    "Selasa",
                    "Rabu",
                    "Kamis",
                    "Jum'at",
                    "Sabtu",
                    "Minggu",
                ],
                delay: 100,
            },
            showAutocompleteOnFocus: true,
        });

        //  $('#skill').on('keyup', function() {
        //    var allowDays = $(this).val();
        //    console.log(allowDays); // Mencetak nilai setiap kali ada perubahan di dalam elemen input
        //  });
    });
</script>
