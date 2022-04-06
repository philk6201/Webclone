<div class="booking-template">
<div class="booking-button-container">
                    <div class="pnr-button">
                        <button class="btn"><img src="image\bookingimagebutton1.jpg"> PNRSTATUS</button>
                    </div>
                    <div class="chart-vaccency">
                        <button class="btn"><img src="image\bookingimagebutton2.jpg">CHARTS/VACCENCY</button>
                    </div>
                </div>
                <div class="booking-form">
                    <div class="booking-container">
                        <div class="form-image">
                            <img src="image\bookingimage1.jpg">
                        </div>
                        <div class="booking-heading">
                            <h3>BOOK TICKET</h3>
                        </div>
                    </div>
                    <div class="form-part-template">
                        <form action="javascript:void(0);">
                            <div class="form-container">
                                <div class="form-group">
                                    <div class="form-in">
                                        <span class="icon-toin"><i class="fa-solid fa-location-arrow"></i>
                                        </span>
                                        <select class="form-control left" name="from" id="from-in">
                                <option  value="" data-content="" selected>From</option>
                                <option value="Patna" >Patna(pnb)</option>
                                <option value="Chandigarh">Chandigarh(cdg)</option>
                                <option value="Ambala-cant">Ambala-cant(umb)</option>
                                <option value="Lucknow">Lucknow(Lnw)</option>
                                <option value="Fkluang">Kluang, Johor</option>
                                <option value="FAG">Alor Gajah, Melaka</option>
                                <option value="FSenawang">Senawang, NS</option>
                                <option value="FKL">KL Sentral, KL</option>
                                <option value="Fipoh">Ipoh, Perak</option>
                                 <option value="Fkulim">Kulim, Kedah</option>
                                <option>Kangar, Perlis</option>
                                <option>AMBIKAPUR </option>
                                <option>AMRITSAR ASR
                               </option>
                                <option>AURANGABAD AWB </option>
                           <option>BAGALKOT Bg</option>
                       <option>BAIDYANATHDHAM BDME</option>
                                <option>BALASORE BLS
                         </option>
                                   </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                    <div class="form-level">
                                        <label>Date and Time<span> *</span></label>
                                    </div>
                                    <div class="form-in">
                                        <input type="date" id="date-in" onclick="dateValidation()" class="form-control right">
                                    </div>
                                </div>
                            </div>
                            <div class="exchange-icon">
                                <span class="icon-exchange">
                                    <i onclick="swap()" id="exchange" class="fa fa-exchange fa-rotate-90"></i>
                                 </span>
                               </div>
                            <div class="form-container">
                            <div class="form-group">
                            <div class="form-in">
                                        <span class="icon-toin"><i class="fa-solid fa-location-dot"></i>
                                        </span>
                                        <select class="form-control left" name="To" id="To-in">
                                    <option value="" disabled selected hidden>To</option>
                                   <option value="Patna" >Patna(pnb)</option>
                                    <option value="Chandigarh">Chandigarh(cdg)</option>
                                    <option value="Ambala-cant">Ambala-cant(umb)</option>
                                    <option value="Lucknow">Lucknow(Lnw)</option>
                                    <option value="FAG">Alor Gajah, Melaka</option>
                                    <option value="FSenawang">Senawang, NS</option>
                                    <option value="FKL">KL Sentral, KL</option>
                                    <option value="Fipoh">Ipoh, Perak</option>
                                    <option value="Fkulim">Kulim, Kedah</option>
                                     <option>Kangar, Perlis</option>
                                    <option>AMBIKAPUR </option>
                                    <option>AMRITSAR </option>
                                    <option>AURANGABAD AWB </option>
                                       <option>BAGALKOT Bg</option>
                                   <option>BAIDYANATHDHAM BDME</option>
                                <option>BALASORE BLS</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-in">
                                        <span class="icon-toin"><i class="fa-solid fa-briefcase"></i>
                                        </span>
                                        <select class="form-control right" name="All-classes" id="classes-in">
                                  <option value="" disabled selected hidden>All classes</option>
                                  <option value="EA" >Anubhuti Class (EA)</option>
                                 <option value="Ec">Exec. Chair Car (EC)</option>
                                  <option value="Fc">First Class (FC)</option>
                                 <option value="3A">AC 3 Tier (3A)</option>
                              <option value="3E">AC 3 Economy (3E)</option>
                               <option value="CC">AC Chair car (CC)</option>
                                 <option value="SL">Sleeper (SL)</option>
                               </select>
                                    </div>
                                </div>
                            </div>
                        <div class="form-container">   
                         <div class="form-group">
                         <div class="form-in">
                                        <span class="icon-toin"><i class="fa-solid fa-table-cells-large"></i>
                                        </span>
                                        <select class="form-control left" name="General" id="General-in">
                                    <option value="" disabled selected hidden>General</option>
                                    <option value="option">Genral</option>
                                     <option value="Ladies">LADIES</option>
                                     <option value="Berth">LOWER BERTH/SR.citizen</option>
                                     <option value="Divtaang">DIVYAANG</option>
                                    <option value="P.tatkal">PREMIUM TATKAL</option>
                               </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-container">
                                <div class="form-group checkbox-selection">
                                    <div class="form-in">
                                        <span class="input-checkbox">
                                        <input class="checkbox" type="checkbox"> Divyaang Concession
                                    </span>
                                        <span class="input-checkbox">
                                        <input class="checkbox" type="checkbox"> Flexible With Date
                                    </span>
                                        <span class="input-checkbox">
                                        <input  class="checkbox" type="checkbox"> Train With Available Birth
                                    </span>
                                        <span class="input-checkbox">
                                        <input  class="checkbox" type="checkbox"> Railway passs Conssesion
                                    </span>
                                    </div>
                                    <span id="checkbox-m"></span>
                                </div>
                            </div>
                            <div class="form-container button">
                                <div class="form-group">
                                    <button class="search-btn" onclick="bookingRequired()">Search</button>
                                </div>
                                <div class="form-group">
                                <input type="button" class="booking-btn" value="Booking-Data" onclick="bookingData()">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="popid" class="pop-up">
                <div class="cross-icon">
                    <i id="cross" onclick="neglijibleTab()" class="fa-solid fa-circle-xmark"></i>
                </div>
                <div class="pop-heading" >
                    <h5>ERROR!!</h5>
                    <div id="pop-heading">
                 </div>
                </div>
            </div>