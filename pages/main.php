 
<!-- script for second share -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0" nonce="0snG1Pyt"></script>
 
      <div class="container-fluid">
        <div class="row">
          <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h5 id="dontGamble">Invest,  Don't Gamble</h5>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="me-2">Share on <span class="fa fa-share-alt"></span>
                <span class="mx-1">
                  <!-- twitter share -->
                  <span class=""><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" target="_blank" data-text="hi there, check our predictions of the day." data-show-count="false"><i class="fab fa-twitter"></i></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></span>
                  <!-- Whatsapp share -->
                  <a class="px-1 ms-1 rounded-2" href=""><i class="fab fa-whatsapp"></i></a>
                  <!-- facebook share -->
                  <span class="px-1 ms-1 rounded-2" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fab fa-facebook"></i></a></span>
                </span>
                </div>
              </div>
            </div>
          </main>
            <?php 
            $superpickquery = "SELECT * FROM superpick_wk1";
            $eplquery = "SELECT * FROM epl_wk1";
            $bundesligaquery = "SELECT * FROM bundesliga_wk1";
            $laligaquery = "SELECT * FROM laliga_wk1";
            $serieaquery = "SELECT * FROM seriea_wk1";
            $eredivisiequery = "SELECT * FROM eredivisie_wk1";
            $ligue1query = "SELECT * FROM ligue1_wk1";
            $otherlgsquery = "SELECT * FROM otherlgs_wk1";
            ?>

            <!-- SUPER PICKS -->
            <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
            <div class="table-responsive py-2">
              <div class="league fw-bold">Special Picks</div>
              <table class="table table-bordered table-sm text-center" id="superpick_table">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Home</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Away</th>
                    <th scope="col">Pick</th>
                    <th scope="col">%</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $superpickresult = mysqli_query($db_connect, $superpickquery);
                  while ($rows=mysqli_fetch_assoc($superpickresult)) {
                  ?>
                  <tr>
                    <td><?= $rows['time']; ?></td>
                    <td><?= $rows['h_team']; ?></td>
                    <td><?= $rows['h_score']; ?></td>
                    <td><?= $rows['a_score']; ?></td>
                    <td><?= $rows['a_team']; ?></td>
                    <td><?= $rows['pick']; ?></td>
                    <td class="probCell"><?= $rows['probability']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            </main>
                  
            <!-- ENGLISH PREMIER LEAGUE -->
            <p id="epl_target"></p>
            <main class="col-md-9 col-lg-10 px-md-4 mx-auto"  id="epl_wrap">
            <!-- EPL PICKS -->
            <div class="table-responsive py-2">
              <div class="league fw-bold">England: Premier League</div>
              <table class="table table-bordered table-sm text-center" id="epl_table">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Home</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Away</th>
                    <th scope="col">Pick</th>
                    <th scope="col">%</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $eplresult = mysqli_query($db_connect, $eplquery);
                  while ($rows=mysqli_fetch_assoc($eplresult)) {
                  ?>
                  <tr>
                    <td><?= $rows['time']; ?></td>
                    <td><?= $rows['h_team']; ?></td>
                    <td><?= $rows['h_score']; ?></td>
                    <td><?= $rows['a_score']; ?></td>
                    <td><?= $rows['a_team']; ?></td>
                    <td class="word-wrap"><?= $rows['pick']; ?></td>
                    <td class="probCell" id="probID"><?= $rows['probability']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            </main>

            <!-- GERMAN BUNDESLIGA -->
            <p id="bundesliga_target"></p>
            <main class="col-md-9 col-lg-10 px-md-4 mx-auto"  id="bundesliga_wrap">
            <!-- EPL PICKS -->
            <div class="table-responsive py-2">
              <div class="league fw-bold">Germany: Bundesliga</div>
              <table class="table  table-bordered table-sm text-center" id="epl_table">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Home</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Away</th>
                    <th scope="col">Pick</th>
                    <th scope="col">%</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $bundesligaresult = mysqli_query($db_connect, $bundesligaquery);
                  while ($rows=mysqli_fetch_assoc($bundesligaresult)) {
                  ?>
                  <tr>
                    <td><?= $rows['time']; ?></td>
                    <td><?= $rows['h_team']; ?></td>
                    <td><?= $rows['h_score']; ?></td>
                    <td><?= $rows['a_score']; ?></td>
                    <td><?= $rows['a_team']; ?></td>
                    <td><?= $rows['pick']; ?></td>
                    <td class="probCell" id="probID"><?= $rows['probability']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            </main>

            <!-- SPANISH LA-LIGA SANTENDER -->
            <p id="laliga_target"></p>
            <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
            <!-- LA LIGA PICKS -->
            <div class="table-responsive py-2">
              <div class="league fw-bold">Spain: La Liga</div>
              <table class="table table-bordered table-sm text-center" id="laliga_table">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Home</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Away</th>
                    <th scope="col">Pick</th>
                    <th scope="col">%</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $laligaresult = mysqli_query($db_connect, $laligaquery);
                  while ($rows=mysqli_fetch_assoc($laligaresult)) {
                  ?>
                  <tr>
                    <td><?= $rows['time']; ?></td>
                    <td><?= $rows['h_team']; ?></td>
                    <td><?= $rows['h_score']; ?></td>
                    <td><?= $rows['a_score']; ?></td>
                    <td><?= $rows['a_team']; ?></td>
                    <td><?= $rows['pick']; ?></td>
                    <td class="probCell"><?= $rows['probability']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </main>

            <!-- ITALIAN SERIE A  -->
            <p id="seriea_target"></p>
            <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
            <!-- SERIE A PICKS -->
            <div class="table-responsive py-2">
              <div class="league fw-bold">Italy: Serie A</div>
              <table class="table table-bordered table-sm text-center" id="seriea_table">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Home</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Away</th>
                    <th scope="col">Pick</th>
                    <th scope="col">%</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $seriearesult = mysqli_query($db_connect, $serieaquery);
                  while ($rows=mysqli_fetch_assoc($seriearesult)) {
                  ?>
                  <tr>
                    <td><?= $rows['time']; ?></td>
                    <td><?= $rows['h_team']; ?></td>
                    <td><?= $rows['h_score']; ?></td>
                    <td><?= $rows['a_score']; ?></td>
                    <td><?= $rows['a_team']; ?></td>
                    <td><?= $rows['pick']; ?></td>
                    <td class="probCell"><?= $rows['probability']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </main>

            <!-- FRENCH LIGUE 1 -->
            <p id="ligue1_target"></p>
            <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
            <!-- LIGUE 1 PICKS -->
            <div class="table-responsive py-2">
              <div class="league fw-bold">France: Ligue 1</div>
              <table class="table table-bordered table-sm text-center" id="ligue1_table">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Home</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Away</th>
                    <th scope="col">Pick</th>
                    <th scope="col">%</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $ligue1result = mysqli_query($db_connect, $ligue1query);
                  while ($rows=mysqli_fetch_assoc($ligue1result)) {
                  ?>
                  <tr>
                    <td><?= $rows['time']; ?></td>
                    <td><?= $rows['h_team']; ?></td>
                    <td><?= $rows['h_score']; ?></td>
                    <td><?= $rows['a_score']; ?></td>
                    <td><?= $rows['a_team']; ?></td>
                    <td><?= $rows['pick']; ?></td>
                    <td class="probCell"><?= $rows['probability']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </main>

            <!-- EREDIVISIE -->
            <p id="eredivisie_target"></p>
            <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
            <!-- EREDIVISIE PICKS -->
            <div class="table-responsive py-2">
              <div class="league fw-bold">Netherland: Eredivisie</div>
              <table class="table table-bordered table-sm text-center" id="eredivisie_table">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Home</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Away</th>
                    <th scope="col">Pick</th>
                    <th scope="col">%</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $eredivisieresult = mysqli_query($db_connect, $eredivisiequery);
                  while ($rows=mysqli_fetch_assoc($eredivisieresult)) {
                  ?>
                  <tr>
                    <td><?= $rows['time']; ?></td>
                    <td><?= $rows['h_team']; ?></td>
                    <td><?= $rows['h_score']; ?></td>
                    <td><?= $rows['a_score']; ?></td>
                    <td><?= $rows['a_team']; ?></td>
                    <td><?= $rows['pick']; ?></td>
                    <td class="probCell"><?= $rows['probability']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </main>

          <!-- OTHER LEAQGUES -->
          <p id="otherlgs_target"></p>
          <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
          <!-- OTHERS PICKS -->
            <div class="table-responsive py-2">
              <div class="league fw-bold">Other Leagues</div>
              <table class="table table-bordered table-sm text-center" id="otherlgs_table">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Home</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Away</th>
                    <th scope="col">Pick</th>
                    <th scope="col">%</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $otherlgsresult = mysqli_query($db_connect, $otherlgsquery);
                  while ($rows=mysqli_fetch_assoc($otherlgsresult)) {
                  ?>
                  <tr>
                    <td><?= $rows['time']; ?></td>
                    <td><?= $rows['h_team']; ?></td>
                    <td><?= $rows['h_score']; ?></td>
                    <td><?= $rows['a_score']; ?></td>
                    <td><?= $rows['a_team']; ?></td>
                    <td><?= $rows['pick']; ?></td>
                    <td class="probCell"><?= $rows['probability']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </main>
          <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
            <div>Success requires patience & time.</div>
            <div>Keep trying till you achieve your desired result.</div>
            <div>Note: all figures are in the Standard currency (&#36;), Convert to your Currency and Invest Accordingly.</div>
          </main>
          <!-- ROLLOVER LEAQGUES -->
          <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
          <!-- 1.5 Odd rollover PICKS -->
            <div class="table-responsive py-2">
              <div class="league fw-bold">1.5 Odds Rollover</div>
              <table class="table table-bordered table-sm text-center text-dark" id="rollover_table">
                <thead class="text-dark">
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Capital</th>
                    <th scope="col">*</th>
                    <th scope="col">Odd</th>
                    <th scope="col">ROI</th>
                    <th scope="col">Matches</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>25 Feb</td>
                    <td>22</td>
                    <td>*</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;44</td>
                    <td>
                      <div><span>Leicester&nbsp;</span>-<span>&nbsp;Arsenal&nbsp;</span><span>&nbsp;A-Over 0.5</span></div>
                      <div><span>R. Madrid&nbsp;</span>-<span>&nbsp;A. Madrid&nbsp;</span><span>&nbsp;H-Over 0.5</span></div>
                    </td>
                    <td>won</td>
                  </tr>
                  <tr>
                    <td>4 May</td>
                    <td>44</td>
                    <td>*</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;88</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>11 Mar</td>
                    <td>88</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;176</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>18 Mar</td>
                    <td>176</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;352</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>25 Mar</td>
                    <td>352</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;704</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1 Apr</td>
                    <td>704</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;1,408</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>8 Apr</td>
                    <td>1,408</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;2,816</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>15 Apr</td>
                    <td>2,816</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;5,632</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>22 Apr</td>
                    <td>5,632</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;11,264</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>29 Apr</td>
                    <td>11,264</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;22,528</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>6 May</td>
                    <td>22,528</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;45,056</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>13 May</td>
                    <td>45,056</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;90,112</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>20 May</td>
                    <td>90,112</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;180,224</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>27 May</td>
                    <td>180,224</td>
                    <td>X</td>
                    <td>1.5</td>
                    <td>&#36;&nbsp;360,448</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </main>
          <!-- 2 odd ROLLOVER  -->
          <main class="col-md-9 col-lg-10 px-md-4 mx-auto">
          <!-- rolloverS PICKS -->
            <div class="table-responsive py-2">
              <div class="league fw-bold">2 Odds Rollover</div>
              <table class="table table-bordered table-sm text-center text-dark" id="rollover_table">
                <thead class="text-dark">
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Capital</th>
                    <th scope="col">*</th>
                    <th scope="col">Odd</th>
                    <th scope="col">ROI (&#36;)</th>
                    <th scope="col">Matches</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 May</td>
                    <td>&#36;&nbsp;5</td>
                    <td>X</td>
                    <td>2</td>
                    <td>&#36;&nbsp;10</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>4 May</td>
                    <td>10</td>
                    <td>X</td>
                    <td>2</td>
                    <td>&#36;&nbsp;20</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>11 Mar</td>
                    <td>20</td>
                    <td>X</td>
                    <td>2</td>
                    <td>&#36;&nbsp;40</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>18 Mar</td>
                    <td>40</td>
                    <td>X</td>
                    <td>2</td>
                    <td>&#36;&nbsp;80</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>25 Mar</td>
                    <td>80</td>
                    <td>X</td>
                    <td>2</td>
                    <td>&#36;&nbsp;160</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1 Apr</td>
                    <td>160</td>
                    <td>X</td>
                    <td>2</td>
                    <td>&#36;&nbsp;360</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>8 Apr</td>
                    <td>360</td>
                    <td>X</td>
                    <td>2</td>
                    <td>&#36;&nbsp;720</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>15 Apr</td>
                    <td>720</td>
                    <td>X</td>
                    <td>2</td>
                    <td>&#36;&nbsp;1440</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>22 Apr</td>
                    <td>1440</td>
                    <td>X</td>
                    <td>2</td>
                    <td>&#36;&nbsp;2880</td>
                    <td>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                      <div><span> &nbsp;</span>-<span>&nbsp; &nbsp;</span><span>&nbsp; </span></div>
                    </td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </main>
        </div>
    </div>
    <!-- end of container div -->
   