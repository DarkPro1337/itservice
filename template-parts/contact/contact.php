<?php
/**
 * Contact us template.
 * 
 * @package ITService
 */
?>


<div class="p-3 bg-secondary bg-gradient mb-4 bg-cover">
    <div class="container py-5 px-3">
        <div class="row">
            <div class="col-md-6">
                <a name="contact">
                    <h4 class="fs-1 text-light">Бесплатно проверим<br>вашу компанию<br>на наличие слабых мест<br>в ИТ-обеспечении</h4><br>
                </a>
            </div>
            <div class="col-md-6">
                <form class="bg-light p-4 rounded-3" method="POST" action="https://formspree.io/f/xwkyelgd">
                    <div class="mb-3">
                        <label for="formInputName" class="form-label">Ваше имя</label>
                        <input type="text" class="form-control" id="formInputName" name="Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="formInputCompany" class="form-label">Наименование организации</label>
                        <input type="text" class="form-control" id="formInputCompany" name="Organization" required>
                    </div>
                    <div class="mb-4">
                        <label for="formInputPhone" class="form-label">Номер телефона</label>
                        <input type="tel" class="form-control" id="formInputPhone" name="Phone" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Отправить</button>
                    <div class="d-flex align-items-center justify-content-center mt-3 w-100 text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill mx-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        <p class="mx-1 my-0 fs-4">+7 921 299 09 01</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
