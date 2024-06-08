@extends('admin.main')

@section('admin.head')
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
    <style>
        .mailbox-read-info h5 {
            font-weight: bold !important;
        }
        .mailbox-read-info h6 {
            font-weight: bold !important;
            margin-bottom: 15px !important;
        }
        .mailbox-read-message p {
            margin-bottom: 10px !important;
        }
        .mailbox-read-message p strong {
            color: #007bff !important;
            font-weight: bold !important;
        }
        .mailbox-read-message ul {
            padding-left: 20px !important;
            list-style-type: disc !important;
        }
        .mailbox-read-message ul li {
            margin-bottom: 5px !important;
        }
    </style>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Tin nhắn</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="mailbox-read-info">
                    <h5>Tin nhắn</h5>
                    <h6>Từ: <strong style="font-size: 20px; margin-left: 5px">{{ $data->name }}</strong>
                        <span class="mailbox-read-time float-right">{{ date_format(date_create($data->created_at), "H:i:s d/m/Y") }}</span>
                    </h6>
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                    <p>
                        <strong>Số điện thoại:</strong> {{ $data->phone }}
                    </p>
                    <p>
                        <strong>Diện tích đất:</strong> {{ $data->area }}
                    </p>
                    <p>
                        <strong>Số tầng muốn xây:</strong> {{ $data->floors }}
                    </p>
                    <p>
                        <strong>Địa điểm:</strong> {{ $data->location }}
                    </p>
                    <p>
                        <strong>Ngân sách:</strong>
                        <ul>
                            @foreach(json_decode($data->budget) as $budgetItem)
                                <li>{{ $budgetItem }}</li>
                            @endforeach
                        </ul>
                    </p>
                    <p>
                        <strong>Tư vấn thiết kế:</strong> {{ $data->design_advice }}
                    </p>
                    <p>
                        <strong>Yêu cầu chi tiết:</strong> {{ $data->detailed_requirements }}
                    </p>
                </div>
                <!-- /.mailbox-read-message -->
            </div>
        </div>
    </div>
@endsection

@section('admin.footer-js')
    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()
        })
    </script>

    <script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
