<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="container">
    <div class="row mt-5">
        @if (isset($id))
            <div class="col-4">
                <h4>Users | Profile:{{ Auth::user()->name }}</h4>
                @livewire('inter-comp')
            </div>
            <div class="col-8">
                <h5>{{ $user2->name }} {{ $user2->phone }}</h5>
                <div>
                    <p class="">
                        {{$messages_user1}}  {{$messages_user2}}
                    </p>
                </div>
                <div class="">
                    <form action="{{ route('m_store', [$id]) }}" method="post">
                        @csrf
                        <div class="mt-2">
                            <input type="text" class="form-control" name="message" placeholder="New Message"
                                id="">
                        </div>
                        <div class="mt-2">
                            <input type="submit" class="form-control btn btn-success" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
</div>
