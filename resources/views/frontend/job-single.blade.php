@extends('frontend.layout.app')
@section('main-content')
<main class="cycys">
    
    <!-- Page content -->
    <section>
        <div class="cnsl7 cwkio cfd1l cwkz1">
            <div class="c0ahj cm48u cef3h c8d05">

                <div class="ceiqu cwa15">

                    <!-- Sidebar -->
                    <aside class="cu2gg crf2m ctnpq cfh68 cc7q4 cmvfi cy519 cjx7n">
                        <div class="c5uys ctbeu">

                            <div class="czhnl c7z1d c2cn0 cwq9z cqwhl ck73f">

                                <div class="czbam ccymi">
                                    <img class="cy6kr cmi0k" src="{{$job->employer_logo}}" width="72" height="72" alt="{{$job->employer_name}}">
                                    <h2 class="cznhr clt06 cqdqx">{{$job->employer_name}}</h2>
                                </div>

                                <div class="cua4c c3tj1 cip9s c8og8">
                                    <ul class="cy6kr czodn ca7zr">
                                        <li class="cduop c8og8">
                                            <svg class="cjqf2 ctzpc c59y5" width="14" height="14" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.707 4.293a1 1 0 0 0-1.414 1.414L10.586 8H2V2h3a1 1 0 1 0 0-2H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h8.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4a1 1 0 0 0 0-1.414l-4-4Z"></path>
                                            </svg>
                                            <span class="cm87k cf37z">
                                                {{ $job->posted_at->isoFormat('Do MMMM, YYYY') }}
                                            </span>
                                        </li>
                                        <li class="cduop c8og8">
                                            <svg class="cjqf2 ctzpc c59y5" width="14" height="16" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="7" cy="7" r="2"></circle>
                                                <path d="M6.3 15.7c-.1-.1-4.2-3.7-4.2-3.8C.7 10.7 0 8.9 0 7c0-3.9 3.1-7 7-7s7 3.1 7 7c0 1.9-.7 3.7-2.1 5-.1.1-4.1 3.7-4.2 3.8-.4.3-1 .3-1.4-.1Zm-2.7-5 3.4 3 3.4-3c1-1 1.6-2.2 1.6-3.6 0-2.8-2.2-5-5-5S2 4.2 2 7c0 1.4.6 2.7 1.6 3.7 0-.1 0-.1 0 0Z"></path>
                                            </svg>
                                            <span class="cm87k cf37z">
                                                {{ $job->city }}, {{ $job->country }} / {{ $job->employment_type }}
                                            </span>
                                        </li>
                                        <li class="cduop c8og8">
                                            <svg class="cjqf2 ctzpc c59y5" width="16" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 0H1C.4 0 0 .4 0 1v10c0 .6.4 1 1 1h14c.6 0 1-.4 1-1V1c0-.6-.4-1-1-1Zm-1 10H2V2h12v8Z"></path>
                                                <circle cx="8" cy="6" r="2"></circle>
                                            </svg>
                                            <span class="cm87k cf37z"> 
                                                {{ $job->min_salary }} - {{ $job->max_salary }} {{ $job->salary_currency }}/{{ $job->salary_period }}
                                            </span>
                                        </li>

                                        <li class="cduop c8og8">
                                            <svg class="cjqf2 ctzpc c59y5" width="16" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 0H1C.4 0 0 .4 0 1v10c0 .6.4 1 1 1h14c.6 0 1-.4 1-1V1c0-.6-.4-1-1-1Zm-1 10H2V2h12v8Z"></path>
                                                <circle cx="8" cy="6" r="2"></circle>
                                            </svg>
                                            <span class="cm87k cf37z"> 
                                                Application Start:  {{ $job->posted_at->isoFormat('Do MMMM, YYYY') }}
                                            </span>
                                
                                        </li>
                                    @if ($job->expaire_at)
                                    <li class="cduop c8og8">
                                        <svg class="cjqf2 ctzpc c59y5" width="16" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 0H1C.4 0 0 .4 0 1v10c0 .6.4 1 1 1h14c.6 0 1-.4 1-1V1c0-.6-.4-1-1-1Zm-1 10H2V2h12v8Z"></path>
                                            <circle cx="8" cy="6" r="2"></circle>
                                        </svg>
                                        <span class="cm87k cf37z"> 
                                            Application Deadline:  {{ $job->expaire_at->isoFormat('Do MMMM, YYYY') }}
                                        </span>
                            
                                    </li>
                                    @endif  
                                    </ul>
                                </div>

                                <div class="c1vmp cfd1l cip9s">
                                    <a target="__blank" class="czwz3 ce7qj cyky3 ctpla cn582 c6kou c0tyr"
                                     href="{{ $job->apply_link }}">
                                        Apply Now 
                                    <span class="c8bku clfy9 ccolo cndda comjk cmwpt ce3ah">-&gt;</span>
                                    </a>
                                </div>

                                <div class="czbam">
                                    <a class="c4von cw2fq c4vrg cf37z" 
                                    href="{{ $job->employer_website }}">
                                        Visit Website</a>
                                </div>

                            </div>

                        </div>
                    </aside>

                    <!-- Main content -->
                    <div class="cd11c">

                        <!-- Job description -->
                        <div class="c8d05">
                            <div class="cvxp4">
                                <a wire:navigate class="cw2fq c4vrg" href="{{route('job.index')}}"><span class="ccolo">&lt;-</span> All Jobs</a>
                            </div>
                            <h1 class="cmz24 cuad0 cgmpd c6cl6">{{ $job->job_title }}</h1>
                            <!-- Job description -->
                            <div class="ctkqc cjx7n">
                                <div>
                                    <h3 class="cznhr clt06 cevzo cd67x">Description:</h3>
                                    <div class="ca6yp cb7bz">
                                        {{ $job->description }}
                                    </div>
                                </div>
                                <div>
                                    @if($job->qualifications)
                                    <h3 class="cznhr clt06 cevzo cd67x">Qualifications:</h3>
                                    <div class="ca6yp cb7bz">
                                       @foreach ( json_decode($job->qualifications) as $qualifications)
                                           <li>{{$qualifications}}</li>
                                       @endforeach
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if($job->responsibilities)
                                    <h3 class="cznhr clt06 cevzo cd67x">Responsibilites:</h3>
                                    <div class="ca6yp cb7bz">
                                        @foreach ( json_decode($job->responsibilities) as $responsibilities)
                                            <li>{{$responsibilities}}</li>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Social share -->
                            <div class="cduop cemyy cu4k7 c8og8">
                                <div class="ccyd8 c1laq cevzo">Share job</div>
                                <ul class="cy6kr c40vg">
                                    <li>
                                        <a class="c16qw cve8r cw2fq c3tj1 ct79c cduop c1g5q comjk cmwpt cww2f c8og8" href="#0" aria-label="Twitter">
                                            <svg class="ca4xu c4lqp c19rb" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m13.063 9 3.495 4.475L20.601 9h2.454l-5.359 5.931L24 23h-4.938l-3.866-4.893L10.771 23H8.316l5.735-6.342L8 9h5.063Zm-.74 1.347h-1.457l8.875 11.232h1.36l-8.778-11.232Z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="c16qw cve8r cw2fq c3tj1 ct79c cduop c1g5q comjk cmwpt cww2f c8og8" href="#0" aria-label="Facebook">
                                            <svg class="ca4xu c4lqp c19rb" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.023 24 14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257Z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="c16qw cve8r cw2fq c3tj1 ct79c cduop c1g5q comjk cmwpt cww2f c8og8" href="#0" aria-label="Telegram">
                                            <svg class="ca4xu c4lqp c19rb" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.968 10.276a.338.338 0 0 0-.232-.253 1.192 1.192 0 0 0-.63.045s-14.019 5.038-14.82 5.596c-.172.121-.23.19-.259.272-.138.4.293.573.293.573l3.613 1.177a.388.388 0 0 0 .183-.011c.822-.519 8.27-5.222 8.7-5.38.068-.02.118 0 .1.049-.172.6-6.606 6.319-6.64 6.354a.138.138 0 0 0-.05.118l-.337 3.528s-.142 1.1.956 0a30.66 30.66 0 0 1 1.9-1.738c1.242.858 2.58 1.806 3.156 2.3a1 1 0 0 0 .732.283.825.825 0 0 0 .7-.622s2.561-10.275 2.646-11.658c.008-.135.021-.217.021-.317a1.177 1.177 0 0 0-.032-.316Z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Related jobs -->
                        <div class="cjx7n">
                            <h4 class="cuad0 clt06 cu7if cjx7n">Related Jobs</h4>
                            <!-- List container -->
                            <div class="czhnl ca7zr c9gvg c8og8">
                                <!-- Item -->
                                @foreach ($relatedJobs as $relatedJob)
                                <div class="cmd8n czhnl cokkt c6kou">
                                    <div class="cwkz1 c0qn4">
                                        <div class="c6rln cclz8 cduop cb7bz cp1au">
                                            <div class="ctzpc">
                                                <img 
                                                src="{{$relatedJob->employer_logo}}" width="56" height="56" alt="{{$relatedJob->employer_name}}">
                                            </div>
                                            <div class="chu3i c966h clhjg cduop cyhe5 cb04d cycys">
                                                <div>
                                                    <div class="c5li5 ccgu6 c8og8">
                                                        <div class="c3774 cznhr cf37z ck6q6">{{$relatedJob->employer_name}}
                                                        </div>
                                                    </div>
                                                    <div class="cmi0k">
                                                        <a wire:navigate class="cznhr clt06 cqdqx" 
                                                        href="{{route('job.single',['uuid' => $relatedJob->uuid])}}">
                                                            {{$relatedJob->job_title}}
                                                        </a>
                                                    </div>
                                                    <div class="c0zhl">
                                                        @if($relatedJob->salary_currency)
                                                        <a class="cv6oq ch6sm ca6yp comjk cy6kr cdxuw c4vrg cmwpt ceip1 cww2f c7d26 c9eyc ce33e cfhya" href="#0">
                                                            {{$relatedJob->min_salary}} - {{$relatedJob->max_salary}}{{$relatedJob->salary_currency}}/{{$relatedJob->salary_period}} 
                                                        </a>
                                                        @endif
                                                        @if($relatedJob->state)
                                                        <a class="cv6oq ch6sm ca6yp comjk cy6kr cdxuw c4vrg cmwpt ceip1 cww2f c7d26 c9eyc ce33e cfhya" href="#0">
                                                            {{$relatedJob->state}},{{$relatedJob->country}}
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="co7yr c16gq c56h7 cduop c40vg c8og8">
                                                    <div class="cjjz8 ct4vx">
                                                        <a wire:navigate target="__blank"
                                                        class="czwz3 ce7qj cyky3 ctpla c2fn4 c40tu c6kou c50eh" href="{{route('job.single',['uuid' => $relatedJob->uuid])}}">
                                                            Apply Now 
                                                            <span class="c8bku clfy9 ccolo cndda comjk cmwpt ce3ah">-&gt;</span>
                                                        </a>
                                                    </div>
                                                    <div class="c2vtk ca6yp cf37z c75bs">
                                                        {{$relatedJob->posted_at->diffForHumans()}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Newletter CTA -->
                        <livewire:email-subscription />

                    </div>

                </div>

            </div>
        </div>
    </section>

</main>
@endsection