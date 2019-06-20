<?php
    function user_form($method, $action, $submit_lable) {
        return <<<HTML
            <form action="{$action}" method="{$method}" class="form">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <fieldset class="fullname-info">
                            <div class="input-wrap d-flex flex-column">
                                <label for="firstname">Имя*</label>
                                <input type="text" id="firstname" name="firstname">
                            </div>
                            <div class="input-wrap d-flex flex-column">
                                <label for="lastname">Фамилия*</label>
                                <input type="text" id="lastname" name="lastname">
                            </div>
                            <div class="input-wrap d-flex flex-column">
                                <label for="patronymic">Отчество*</label>
                                <input type="text" id="patronymic" name="patronymic">
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <fieldset class="department">
                            <div class="input-wrap d-flex flex-column">
                                <label for="group">Группа*</label>
                                <select name="group" id="group">
                                    <option value="Г">Г</option>
                                    <option value="Д">Д</option>
                                    <option value="П(а)">П(а)</option>
                                    <option value=П(б)>П(б)</option>
                                    <option value="У(а)">У(а)</option>
                                    <option value="У(б)">У(б)</option>
                                    <option value="И">И</option>
                                    <option value="Т">Т</option>
                                </select>
                            </div>
                            <div class="input-wrap d-flex flex-column">
                                <label for="speciality">Специальность*</label>
                                <select name="speciality" id="speciality">
                                    <option value="Гостиничный сервис">Гостиничный сервис</option>
                                    <option value="Дошкольное образование">Дошкольное образование</option>
                                    <option value="Организация обслуживания в общественном питании">Обслуживания в общ. питании</option>
                                    <option value="Преподавание в начальных классах">Преподавание в начальных классах</option>
                                    <option value="Прикладная информатика">Прикладная информатика</option>
                                    <option value="Туризм">Туризм</option>
                                </select>
                            </div>
                            <input class="submit" name="submit" type="submit" value="{$submit_lable}"/>
                        </fieldset>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <fieldset class="other-info">
                            <div class="input-wrap d-flex flex-column">
                                <label for="start-age">Год начала обучения*</label>
                                <select name="start_age" id="start-age">
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                </select>
                            </div>
                            <div class="input-wrap d-flex flex-column">
                                <label for="finish-age">Год окончания обучения*</label>
                                <select name="finish_age" id="finish-age">
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                </select>
                            </div>
                            
                        </fieldset>
                    </div>
                </div>
            </form>
HTML;
    }
?>