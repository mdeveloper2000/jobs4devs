@props(['job'])

    <div class="card mb-3">
        <div class="card-header fw-bold">
            <span class="card-title text-center">{{$job->title}} <i class="fa-solid fa-code"></i></span>
        </div>
        <div class="card-body" style="min-height: 100px;">                            
            <p class="card-text">
                {{$job->description}}
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <x-tags :tags="$job->tags" />
            </li>
            <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i> {{$job->city}}</li>
            <li class="list-group-item"><i class="bi bi-clock-fill"></i> {{$job->time}}</li>
            <li class="list-group-item"><i class="bi bi-person-badge-fill"></i> {{$job->contract}}</li>
        </ul>                       
        <div class="card-footer text-center">
            <a class="btn btn-primary btn-sm" href="/jobs/show/{{$job->id}}">
                <i class="bi bi-card-list"></i> Informações
            </a>
        </div>
    </div>