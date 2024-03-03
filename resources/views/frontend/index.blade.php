@extends('frontend.layout.app')
@section('main-content')
<main class="cycys">

    <!-- Hero -->
    <section class="cwq9z cj019">

        <!-- Bg -->
        <div class="cetod c6kdq cjxga c8f1b cfcbm ctjxe cjcd5" aria-hidden="true"></div>

        <!-- Illustration -->
        <div class="cetod c6kdq c8zq8 c8f1b cndjv codga c9rix" aria-hidden="true">
            <img src="images/hero-illustration.svg" class="co24w" width="1440" height="749" alt="Hero Illustration">
        </div>

        <div class="cfd1l cnsl7 cwkz1 cwkio">
            <div class="c8d05 cef3h c0ahj cm48u">

                <!-- Hero content -->
                <div class="clxkp czbam chjqk">

                    <!-- Copy -->
                    <h1 class="ckqm5 ccymi cuad0">Join your desgire job in the <span class="c1laq chgw8 cw2fq">industry</span></h1>
                    <p class="cjx7n cqdqx ca6yp">This is the place where you can find your desgire job.</p>
                    <!-- Button + Avatars -->
                    <div class="cswe3 cp1au c8p1b crj19 c6rln cclz8 cua4c">
                        <div class="czodn cp1au c8p1b crj19 cypyb cclz8">
                            <div class="cs3h1 cy6kr csd9h">
                                <img class="c52nt c1g5q caz15 c4146" src="images/avatar-01.jpg" width="32" height="32" alt="Avatar 01">
                                <img class="c52nt c1g5q caz15 c4146" src="images/avatar-02.jpg" width="32" height="32" alt="Avatar 02">
                                <img class="c52nt c1g5q caz15 c4146" src="images/avatar-03.jpg" width="32" height="32" alt="Avatar 03">
                                <img class="c52nt c1g5q caz15 c4146" src="images/avatar-04.jpg" width="32" height="32" alt="Avatar 04">
                            </div>
                            <div class="cf37z c4vrg ca6yp">Reach <span class="cw2fq">100K+</span> Prefessionals</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
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
                            <h2 class="c6cl6 cuad0 cfibj clt06">Latest jobs</h2>
                            <!-- List container -->
                            @foreach ($jobs as $index => $job)
                            <div class="c8og8 ca7zr">
                                        <!-- Render job item -->
                                 <div class="cokkt czhnl c6kou cmd8n">
                                    <div class="cwkz1 c0qn4">
                                        <div class="cduop cb7bz cp1au c6rln cclz8">
                                            <div class="ctzpc">
                                                <img src="{{$job->employer_logo}}" width="56" height="56" alt="Company 05">
                                            </div>
                                            <div class="cycys cduop chu3i cyhe5 cb04d c966h clhjg">
                                                <div>
                                                    <div class="c8og8 c5li5 ccgu6">
                                                        <div class="ck6q6 cf37z c3774 cznhr">
                                                            <a href="{{$job->employer_website}}">
                                                               {{$job->employer_name}}</a></div>
                                                    </div>
                                                <div class="cmi0k">
                                                    <a class="cqdqx clt06 cznhr" href="job-post.html"> {{$job->job_title}}</a>
                                                </div>
                                                <div class="c0zhl">
                                                    <a class="cfhya cy6kr ch6sm ceip1 cdxuw ce33e c7d26 c9eyc c4vrg ca6yp cww2f comjk cmwpt cv6oq" href="#0">
                                                        {{$job->employment_type}}</a>
                                                </div>
                                            </div>
                                            <div class="c8og8 co7yr cduop c40vg c16gq c56h7">
                                                <div class="ct4vx cjjz8">
                                                    <a class="c40tu ce7qj c50eh c2fn4 cyky3 ctpla czwz3 c6kou" href="{{route('job.single', ['uuid' => $job->uuid])}}">
                                                         Apply Now <span class="ce3ah ccolo cndda clfy9 comjk cmwpt c8bku">-&gt;</span>
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
                       
                        <div>
                            <h2 class="c6cl6 cuad0 cfibj clt06">Our customers love us</h2>
                            <!-- Testimonials container -->
                            <div class="c2i7x">
                                <!-- Item -->
                                <div class="c7z1d cqwhl ch4ps ch7jl ck73f cww2f comjk cmwpt casko csmwo cao76">
                                    <div class="c8og8 cduop cv4ej">
                                        <div class="cwq9z ctzpc">
                                            <img class="c1g5q" src="images/testimonial-01.jpg" width="102" height="102" alt="Testimonial 01">
                                            <svg class="c6kdq cyzod c753i cflao" width="26" height="17" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 16.026h8.092l6.888-16h-4.592L0 16.026Zm11.02 0h8.092L26 .026h-4.65l-10.33 16Z"></path>
                                            </svg>
                                        </div>
                                        <figure>
                                            <blockquote class="cg9ly cmn18 cqdqx clt06">
                                                <p>Hiring a Senior Laravel engineer through JobBoard has been incredible. The best job board experience we've ever had.</p>
                                            </blockquote>
                                            <figcaption class="cf37z c4vrg">Patrick Metzger, CEO <a class="c0bjb c4von" href="#0">App.com</a></figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="c7z1d cqwhl crhpi c0s3t ck73f cww2f comjk cmwpt casko csmwo cao76">
                                    <div class="c8og8 cduop cv4ej">
                                        <div class="cwq9z ctzpc">
                                            <img class="c1g5q" src="images/testimonial-02.jpg" width="102" height="102" alt="Testimonial 02">
                                            <svg class="c6kdq cyzod c753i cflao" width="26" height="17" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 16.026h8.092l6.888-16h-4.592L0 16.026Zm11.02 0h8.092L26 .026h-4.65l-10.33 16Z"></path>
                                            </svg>
                                        </div>
                                        <figure>
                                            <blockquote class="cg9ly cmn18 cqdqx clt06">
                                                <p>Hiring a Senior Laravel engineer through JobBoard has been incredible. The best job board experience we've ever had.</p>
                                            </blockquote>
                                            <figcaption class="cf37z c4vrg">Annie Patrick, CEO <a class="cpjz5 c4von" href="#0">TrueThing</a></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

</main>
@endsection