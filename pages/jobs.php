<div class="mb-4 p-5 container">
    <div class="row">
        <div class="col-12">
            <h4>Jobs</h4>
        </div>

        <div class="col-12 mb-4">
            <select class="form-select" aria-label="Select area">
                <option selected>Select area</option>
                <option value="php">PHP</option>
                <option value="backend">backend</option>
                <option value="html">HTML</option>
                <option value="danger">Danger</option>
                <option value="devops">DevOps</option>
                <option value="info">Info</option>
                <option value="light">Light</option>
                <option value="dark">Dark</option>
            </select>
        </div>

        <div class="col-12">
            <div class="row">
                <?php foreach (range(1, 10) as $i) : ?>
                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Card title <?= $i ?></h5>
                                <div class="w-100">
                                    <span class="badge bg-primary">PHP</span>
                                    <span class="badge bg-secondary">back-end</span>
                                    <span class="badge bg-success">HTML</span>
                                    <span class="badge bg-danger">Danger</span>
                                    <span class="badge bg-warning text-dark">DevOps</span>
                                    <span class="badge bg-info text-dark">Info</span>
                                    <span class="badge bg-light text-dark">Light</span>
                                    <span class="badge bg-dark">Dark</span>
                                </div>

                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <div class="accordion" id="accordionExample_<?= $i ?>">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree_<?= $i ?>">
                                            <button class="accordion-button collapsed btn btn-sm btn-outline-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree_<?= $i ?>" aria-expanded="false" aria-controls="collapseThree_<?= $i ?>">
                                                More...
                                            </button>
                                        </h2>
                                        <div id="collapseThree_<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="headingThree_<?= $i ?>" data-bs-parent="#accordionExample_<?= $i ?>">
                                            <div class="accordion-body">
                                                <p><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</p>
                                                <div class="d-flex justify-content-around">
                                                    <button class="btn btn-sm btn-outline-primary">Share</button>
                                                    <button class="btn btn-sm btn-outline-info">Send by e-mail</button>
                                                    <button class="btn btn-sm btn-outline-success">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-12">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
