              <label >Cliente Único</label>
                <div class="row form-group">
                    <input type="hidden" name="TipoBusqueda" value="1" >  
                  <div class="cu">
                    <input type="text"
                           class="form-control validanumericos"
                           style="width: 65px; margin-left: 5px;"
                           name="cu1"
                           id="cu1"
                           maxlength="4"
                           onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu2.focus()" autocomplete="off"
                           inputmode="numeric">
                  </div>
                  <div class="cu">
                  <input type="text"
                           class="form-control validanumericos"
                           style="width: 65px;"
                           name="cu2"
                           id="cu2"
                           maxlength="4"
                           onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu3.focus()" autocomplete="off"
                           inputmode="numeric">
                  </div>
                  <div class="cu">
                  <input type="text"
                           class="form-control validanumericos"
                           style="width: 65px;"
                           name="cu3"
                           id="cu3"
                           maxlength="4"
                           onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu4.focus()" autocomplete="off"
                           inputmode="numeric">
                  </div>
                  <div class="cu">
                  <input type="text"
                           class="form-control validanumericos"
                           style="width: 65px;"
                           name="cu4"
                           id="cu4"
                           maxlength="6"
                           autocomplete="off"
                           inputmode="numeric">
                  </div>
                  
                </div>