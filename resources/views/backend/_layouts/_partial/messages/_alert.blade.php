@if($errors->any())
    <div class="card" id="flash-message">
        <div class="card-header">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <style>
        #flash-message {
            position: fixed;
            background-color: #ffc9c9;
            right: 20px;
            z-index: 10;
            opacity: .85;
            padding: 20px;
            animation: flash-message 10s forwards;
        }

        @keyframes flash-message {
            0%   {opacity: 1;}
            100% {opacity: 0; display:none;}
        }
    </style>
@endif