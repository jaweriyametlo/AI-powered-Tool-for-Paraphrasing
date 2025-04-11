@extends('layouts.master')

@section('title', 'Analysis Page')

@section('content')
<section class="skill-area pt-120">
    <div class="container d-flex justify-content-center">
        <div class="col-8">
            <h5 class="text-center mb-4">Analysis</h5>

            <ul class="nav nav-tabs nav-fill fs-5" id="analysisTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active p-3" id="tab1-tab" data-toggle="tab" data-target="#tab1" type="button" role="tab">Tab 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link p-3" id="tab2-tab" data-toggle="tab" data-target="#tab2" type="button" role="tab">Tab 2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link p-3" id="tab3-tab" data-toggle="tab" data-target="#tab3" type="button" role="tab">Tab 3</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link p-3" id="tab4-tab" data-toggle="tab" data-target="#tab4" type="button" role="tab">Tab 4</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link p-3" id="tab5-tab" data-toggle="tab" data-target="#tab5" type="button" role="tab">Tab 5</button>
                </li>
            </ul>

            <div class="tab-content mt-4" id="analysisTabContent">
                <div class="tab-pane fade show active text-center" id="tab1" role="tabpanel">
                    <img id="tab1-img" class="img-fluid rounded shadow-lg" style="max-height: 400px;" alt="Tab 1 Image">
                    <p class="mt-3 fs-5" id="tab1-desc">This is the description for Tab 1.</p>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab1-desc')">Paraphrase</button>
                        <select class="form-select w-auto mx-2 language-select">
                            <option value="en">English</option>
                            <option value="fr">French</option>
                            <option value="es">Spanish</option>
                            <option value="arabic">Arabic</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="bn">Bangla</option>
                            <option value="hindi">Hindi</option>
                        </select>
                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab1-desc')">Submit</button>
                        <div class="loader" style="display: none;">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 2 Content -->
                <div class="tab-pane fade text-center" id="tab2" role="tabpanel">
                    <img id="tab2-img" class="img-fluid rounded shadow-lg" style="max-height: 400px;" alt="Tab 2 Image">
                    <p class="mt-3 fs-5" id="tab2-desc">This is the description for Tab 2.</p>

                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab2-desc')">Paraphrase</button>
                        <select class="form-select w-auto mx-2 language-select">
                            <option value="en">English</option>
                            <option value="fr">French</option>
                            <option value="es">Spanish</option>
                            <option value="arabic">Arabic</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="bn">Bangla</option>
                            <option value="hindi">Hindi</option>
                        </select>

                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab2-desc')">Submit</button>

                        <div class="loader" style="display: none;">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 3 Content -->
                <div class="tab-pane fade text-center" id="tab3" role="tabpanel">
                    <img id="tab3-img" src="{{ asset('/assets/images/hero-img.png') }}" class="img-fluid rounded shadow-lg" style="max-height: 400px;" alt="Tab 3 Image">
                    <p class="mt-3 fs-5" id="tab3-desc">This is the description for Tab 3.</p>

                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab3-desc')">Paraphrase</button>
                        <select class="form-select w-auto mx-2 language-select">
                            <option value="en">English</option>
                            <option value="fr">French</option>
                            <option value="es">Spanish</option>
                            <option value="arabic">Arabic</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="bn">Bangla</option>
                            <option value="hindi">Hindi</option>
                        </select>

                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab3-desc')">Submit</button>

                        <div class="loader" style="display: none;">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 4 Content -->
                <div class="tab-pane fade text-center" id="tab4" role="tabpanel">
                    <img id="tab4-img" src="{{ asset('/assets/images/hero-img.png') }}" class="img-fluid rounded shadow-lg" style="max-height: 400px;" alt="Tab 4 Image">
                    <p class="mt-3 fs-5" id="tab4-desc">This is the description for Tab 4.</p>

                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab4-desc')">Paraphrase</button>
                        <select class="form-select w-auto mx-2 language-select">
                            <option value="en">English</option>
                            <option value="fr">French</option>
                            <option value="es">Spanish</option>
                            <option value="arabic">Arabic</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="bn">Bangla</option>
                            <option value="hindi">Hindi</option>
                        </select>

                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab4-desc')">Submit</button>

                        <div class="loader" style="display: none;">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 5 Content -->
                <div class="tab-pane fade text-center" id="tab5" role="tabpanel">
                    <img id="tab5-img" src="{{ asset('/assets/images/hero-img.png') }}" class="img-fluid rounded shadow-lg" style="max-height: 400px;" alt="Tab 5 Image">
                    <p class="mt-3 fs-5" id="tab5-desc">This is the description for Tab 5.</p>

                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab5-desc')">Paraphrase</button>
                        <select class="form-select w-auto mx-2 language-select">
                            <option value="en">English</option>
                            <option value="fr">French</option>
                            <option value="es">Spanish</option>
                            <option value="arabic">Arabic</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="bn">Bangla</option>
                            <option value="hindi">Hindi</option>
                        </select>

                        <button class="btn btn-primary mx-2" onclick="paraphraseText('tab5-desc')">Submit</button>

                        <div class="loader" style="display: none;">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    function paraphraseText(tabId) {
        var description = $('#' + tabId).text();
        var selectedLanguage = $('#' + tabId).closest('.tab-pane').find('.language-select').val();
        var loader = $('#' + tabId).closest('.tab-pane').find('.loader');
        loader.show();
        $.ajax({
            url: '/paraphrase',
            method: 'POST',
            data: {
                text: description,
                language: selectedLanguage,
                tabId_desc: tabId,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                loader.hide()
                if (response.status === 'success') {
                    $('#' + tabId).text(response.paraphrasedText);
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                loader.hide()
                alert('An error occurred while paraphrasing the text.');
            }
        });
    }

    // Fetch all tabs' content in one API call
    function loadAllTabsContent() {
        $.ajax({
            url: '/get-tabs-content',  // API endpoint to get all tab data
            method: 'GET',
            success: function(response) {
                if (response.status === 'success') {
                    // Loop through all tabs and update content dynamically
                    for (const tabId in response.tabs) {
                        const tabData = response.tabs[tabId];
                        $('#' + tabId + '-img').attr('src', tabData.image);
                        $('#' + tabId + '-desc').text(tabData.description);
                    }
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred while loading the tab content.');
            }
        });
    }

    // Load content for all tabs when the page is ready
    $(document).ready(function() {
        loadAllTabsContent();
    });
</script>
@endpush

@endsection