@if (count($members)>0)
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Team</div>
            <h2 class="mb-5">Meet Our Team Members</h2>
        </div>
        <div class="row g-4">
            @foreach ( $members as $member )
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <h5>{{$member->name}}</h5>
                    <p class="mb-4">{{$member->position}}</p>
                    <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset("storage/members/$member->image") }}"
                        alt="">
                    <div class="d-flex justify-content-center">
                        @if ($member->facebook)
                        <a class="btn btn-square text-primary bg-white m-1" href="{{$member->facebook}}"><i
                            class="fab fa-facebook-f"></i></a>
                        @endif
                     
                        @if ($member->twitter)
                        <a class="btn btn-square text-primary bg-white m-1" href="{{$member->twitter}}"><i
                            class="fab fa-twitter"></i></a>
                        @endif
                       
                        @if ($member->linkedin)
                        <a class="btn btn-square text-primary bg-white m-1" href="{{$member->linkedin}}"><i
                            class="fab fa-linkedin-in"></i></a>
                        @endif
                     
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>
@endif
