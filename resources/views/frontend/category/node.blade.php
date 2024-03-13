@extends('frontend.layout.app')
@section('main-content')
    <!-- Page content -->
    <section>
        <div class="cfd1l cnsl7 cwkz1 cwkio">
            <div class="coh2n cm5ip">

                <div class="cwa15 ceiqu">

                    <!-- Sidebar -->
                    <aside class="cjx7n crf2m cc7q4 ctnpq cmvfi cu2gg cfh68 cy519">
                        <div class="c5uys ctbeu">
                    
                            <div class="cwq9z c7z1d cqwhl czhnl c2cn0 ck73f">

                                <div class="c6kdq cv23o cx5ip cv5zz">
                                    <button class="cf37z c4vrg cw2fq c4von">Clear</button>
                                </div>

                                <div class="c8dcm c3ma2 cx1zb cr8k3">
                                    <!-- Group 1 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Job Type</div>
                                        <ul class="czodn">
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Full-time</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Part-time</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Intership</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Contract / Freelance</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Co-founder</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Group 2 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Job Roles</div>
                                        <ul class="czodn">
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja" checked="">
                                                    <span class="cvhuf cf37z cm87k">Programming</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Design</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Management / Finance</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Customer Support</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Sales / Marketing</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Group 3 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Remote Only</div>
                                        <div class="c8og8 cduop" x-data="{ checked: false }">
                                            <div class="cumo3">
                                                <input type="checkbox" id="remote-toggle" class="cxbaz" x-model="checked">
                                                <label class="cg72j" for="remote-toggle">
                                                    <span class="cz0l8 ctpla" aria-hidden="true"></span>
                                                    <span class="cxbaz">Remote Only</span>
                                                </label>
                                            </div>
                                            <div class="cvhuf cf37z c75bs ccyd8" x-text="checked ? 'On' : 'Off'"></div>
                                        </div>
                                    </div>
                                    <!-- Group 3 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Salary Range</div>
                                        <ul class="czodn">
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">$20K - $50K</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">$50K - $100K</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">&gt; $100K</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Drawing / Painting</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Group 4 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Location</div>
                                        <label class="cxbaz">Location</label>
                                        <select class="coiqx cn582">
                                            <option>Anywhere</option>
                                            <option>London</option>
                                            <option>San Francisco</option>
                                            <option>New York</option>
                                            <option>Berlin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </aside>

                    <!-- Main content -->
                    <div class="cd11c">
                        <!-- Job list -->
                        <div class="c8d05 c0ahj">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <h2 class="c6cl6 cuad0 cfibj clt06">Latest NodeJS Jobs</h2>
                                <p>Today Total Jobs: {{$totalJobs}}</p>
                            </div>
                            <!-- List container -->
                            @foreach ($jobs as $index => $job)
                            <div class="c8og8 ca7zr">
                                        <!-- Render job item -->
                                 <div class="cokkt czhnl c6kou cmd8n">
                                    <div class="cwkz1 c0qn4">
                                        <div class="cduop cb7bz cp1au c6rln cclz8">
                                            <div class="ctzpc">
                                                <img src="
                                                @if($job->employer_logo)
                                                {{$job->employer_logo}}
                                                @else
                                                {{asset('images/default.jpg')}}
                                                @endif
                                                " width="56" height="56" alt="{{$job->employer_name}}">
                                            </div>
                                            <div class="cycys cduop chu3i cyhe5 cb04d c966h clhjg">
                                                <div>
                                                    <div class="c8og8 c5li5 ccgu6">
                                                        <div class="ck6q6 cf37z c3774 cznhr">
                                                            <a href="{{$job->employer_website}}">
                                                               {{$job->employer_name}}</a></div>
                                                    </div>
                                                <div class="cmi0k">
                                                    <a target="__blank" class="cqdqx clt06 cznhr" href="{{route('job.single',['uuid'=>$job->uuid])}}"> {{$job->job_title}}</a>
                                                </div>
                                                <div class="c0zhl">
                                                    <a class="cfhya cy6kr ch6sm ceip1 cdxuw ce33e c7d26 c9eyc c4vrg ca6yp cww2f comjk cmwpt cv6oq" href="#0">
                                                        {{$job->employment_type}}</a>
                                                </div>
                                            </div>
                                            <div class="c8og8 co7yr cduop c40vg c16gq c56h7">
                                                <div class="ct4vx cjjz8">
                                                    <a wire:navigate
                                                    class="c40tu ce7qj c50eh c2fn4 cyky3 ctpla czwz3 c6kou" 
                                                    href="{{route('job.single', ['uuid' => $job->uuid])}}">
                                                         Apply Now 
                                                         <span 
                                                         class="ce3ah ccolo cndda clfy9 comjk cmwpt c8bku">-&gt;
                                                         </span>
                                                    </a>
                                                </div>
                                                <div class="cf37z c75bs ca6yp c2vtk">
                                                    {{$job->posted_at->diffForHumans()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            @if ($index % 10 === 0)
                              <livewire:email-subscription />
                            @endif
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="pagination">
                    @foreach ($jobs->getUrlRange(1, $jobs->lastPage()) as $page => $url)
                        <a wire:navigate href="{{ $url }}" class="page @if ($page === $jobs->currentPage()) active @endif">{{ $page }}</a>
                    @endforeach    
                </div>
                
                
                  

                </div>
        </div>
    </section>
@endsection