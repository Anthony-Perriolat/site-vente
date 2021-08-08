@extends("base")
@section("content") <div class="form-body">
    <div class="row">
        <div class="form-holder bg-blue">
            <div class="form-content">
                <div class="form-items">
                    <h3>Formulaire de contact</h3>
                    <p>Renseignez vos coordonné et votre demande</p>
                    <form class="requires-validation" novalidate>
                        {{ csrf_field() }}

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="name" placeholder="Nom" required>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="email" name="email" placeholder="Adresse E-mail" required>
                            <div class="valid-feedback">Email invalide</div>
                            <div class="invalid-feedback">L'email est vide</div>
                        </div>

                        <div class="col-md-12">
                            <select class="form-select mt-3" required>
                                <option selected disabled value="">Demande</option>
                                <option value="jweb">Site Vitrine</option>
                                <option value="sweb">Site e-commerce</option>
                                <option value="pmanager">Autre</option>
                            </select>
                        </div>


                        <div class="col-md-12">
                            <textarea class="form-control my-2" id="exampleFormControlTextarea1" placeholder="Votre projet" required rows="3"></textarea>
                        </div>


                        <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Genre: </label>

                            <input type="radio" class="btn-check" name="gender" id="Entreprise" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Entreprise">Entreprise</label>

                            <input type="radio" class="btn-check" name="gender" id="Particulier" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Particulier">Particulier</label>
                        </div>
                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    (function () {
        'use strict'
        const forms = document.querySelectorAll('.requires-validation')
        Array.from(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

</script>
