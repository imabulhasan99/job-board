<div>
    <div class="cd11c">
        <!-- Job list -->
        <div class="c8d05 c0ahj">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h2 class="c6cl6 cuad0 cfibj clt06">Latest jobs</h2>
                <p>Today Total Jobs: {{ $totalJobs }}</p>
            </div>
            <!-- List container -->
            @foreach ($jobs as $index => $job)
                <div class="c8og8 ca7zr">
                    <!-- Render job item -->
                    <div class="cokkt czhnl c6kou cmd8n">
                        <div class="cwkz1 c0qn4">
                            <div class="cduop cb7bz cp1au c6rln cclz8">
                                <div class="ctzpc">
                                    <img src="{{ $job['employer_logo'] ?? asset('images/default.jpg') }}" width="56" height="56" alt="Company 05">
                                </div>
                                <div class="cycys cduop chu3i cyhe5 cb04d c966h clhjg">
                                    <div>
                                        <div class="c8og8 c5li5 ccgu6">
                                            <div class="ck6q6 cf37z c3774 cznhr">
                                                <a href="{{ $job['employer_website'] }}">{{ $job['employer_name'] }}</a>
                                            </div>
                                        </div>
                                        <div class="cmi0k">
                                            <a class="cqdqx clt06 cznhr" target="__blank" href="{{ route('job.single', ['uuid' => $job['uuid']]) }}">{{ $job['job_title'] }}</a>
                                        </div>
                                        <div class="c0zhl">
                                            <a class="cfhya cy6kr ch6sm ceip1 cdxuw ce33e c7d26 c9eyc c4vrg ca6yp cww2f comjk cmwpt cv6oq" href="#0">{{ $job['employment_type'] }}</a>
                                        </div>
                                    </div>
                                    <div class="c8og8 co7yr cduop c40vg c16gq c56h7">
                                        <div class="ct4vx cjjz8">
                                            <a class="c40tu ce7qj c50eh c2fn4 cyky3 ctpla czwz3 c6kou" wire:navigate href="{{ route('job.single', ['uuid' => $job['uuid']]) }}">Apply Now <span class="ce3ah ccolo cndda clfy9 comjk cmwpt c8bku">-&gt;</span></a>
                                        </div>
                                        <div class="cf37z c75bs ca6yp c2vtk">
                                            {{ \Carbon\Carbon::parse($job['posted_at'])->diffForHumans() }}</div>
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

            <!-- Load More Button -->
            @if (count($jobs) < $totalJobs)
            <div style="text-align: center; margin-top: 20px;">
                <button wire:click='loadMore()' style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Load More</button>
            </div>
            @endif
        </div>
    </div>
</div>
