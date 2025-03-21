                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Item</th>
                                        <th>PAHANG</th>
                                        <th>KEDAH</th>
                                        <th>PERLIS</th>
                                        <th>TERENGGANU</th>
                                        <th>PERAK</th>
                                        <th>JOHOR</th>
                                        <th>SELANGOR</th>
                                        <th>SARAWAK</th>
                                    </tr>
                                    <tr>
                                        <th>CURRENT</th>
                                        <th>CURRENT</th>
                                        <th>CURRENT</th>
                                        <th>CURRENT</th>
                                        <th>CURRENT</th>
                                        <th>CURRENT</th>
                                        <th>CURRENT</th>
                                        <th>CURRENT</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php foreach ($status as $key => $value) {  ?>
                                    <tr>
                                        <td><?php echo $value['id']; ?></td>
                                        <td><?php echo $value['item']; ?></td>
                                        <td><?php echo $value['pahang']; ?></td>
                                        <td><?php echo $value['kedah']; ?></td>
                                        <td><?php echo $value['perlis']; ?></td>
                                        <td><?php echo $value['terengganu']; ?></td>
                                        <td><?php echo $value['perak']; ?></td>
                                        <td><?php echo $value['johor']; ?></td>
                                        <td><?php echo $value['selangor']; ?></td>
                                        <td><?php echo $value['sarawak']; ?></td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                            <br>
                            <?php foreach ($reject as $key => $value) {
                               $r_pahang = $value['pahang'];
                               $r_kedah = $value['kedah'];
                               $r_perlis = $value['perlis'];
                               $r_terengganu = $value['terengganu'];
                               $r_perak = $value['perak'];
                               $r_johor = $value['johor'];
                               $r_selangor = $value['selangor'];
                               $r_sarawak = $value['sarawak'];

                            } ?>
                            <?php 

                            $percentage_pahang = $percentage_kedah = $percentage_perlis = $percentage_terengganu = $percentage_perak = $percentage_johor = $percentage_selangor = $percentage_sarawak = 0; ?>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Pahang</th>
                                        <th>Kedah</th>
                                        <th>Perlis</th>
                                        <th>Terengganu</th>
                                        <th>Perak</th>
                                        <th>Johor</th>
                                        <th>Selangor</th>
                                        <th>Sarawak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <!--<td>DATA REJECTED</td>
                                        <td><?= $r_pahang; ?></td>
                                        <td><?= $r_kedah; ?></td>
                                        <td><?= $r_perlis; ?></td>
                                        <td><?= $r_terengganu; ?></td>
                                        <td><?= $r_perak; ?></td>
                                        <td><?= $r_johor; ?></td>
                                        <td><?= $r_selangor; ?></td>-->
                                    </tr>
                                    <tr>
                                        <td>DATA ENTERED</td>
                                        <td><?= $p_pahang; ?></td>
                                        <td><?= $p_kedah; ?></td>
                                        <td><?= $p_perlis; ?></td>
                                        <td><?= $p_terengganu; ?></td>
                                        <td><?= $p_perak; ?></td>
                                        <td><?= $p_johor; ?></td>
                                        <td><?= $p_selangor; ?></td>
                                        <td><?= $p_sarawak; ?></td>
                                    </tr>
                                    <tr>
                                        <td>DATA VERIFIED</td>
                                        <td><?= $ps_pahang; ?></td>
                                        <td><?= $ps_kedah; ?></td>
                                        <td><?= $ps_perlis; ?></td>
                                        <td><?= $ps_terengganu; ?></td>
                                        <td><?= $ps_perak; ?></td>
                                        <td><?= $ps_johor; ?></td>
                                        <td><?= $ps_selangor; ?></td>
                                        <td><?= $ps_sarawak; ?></td>
                                    </tr>
                                    <tr>
                                        <td>BALANCE TO VERIFY</td>
                                        <td><?= $baki_pahang = $p_pahang - $ps_pahang ?></td>
                                        <td><?= $baki_kedah = $p_kedah - $ps_kedah ?></td>
                                        <td><?= $baki_perlis = $p_perlis - $ps_perlis ?></td>
                                        <td><?= $baki_terengganu = $p_terengganu - $ps_terengganu ?></td>
                                        <td><?= $baki_perak = $p_perak - $ps_perak ?></td>
                                        <td><?= $baki_johor = $p_johor - $ps_johor ?></td>
                                        <td><?= $baki_selangor = $p_selangor - $ps_selangor ?></td>
                                        <td><?= $baki_sarawak = $p_sarawak - $ps_sarawak ?></td>
                                    </tr>
                                    <tr>
                                        <td>% TO VERIFY</td>
                                        <td><?php $percentage_pahang = ($baki_pahang / $p_pahang) * 100; echo round($percentage_pahang)."%"; ?></td>
                                        <td><?php $percentage_kedah = ($baki_kedah / $p_kedah) * 100; echo round($percentage_kedah)."%"; ?></td>
                                        <td><?php $percentage_perlis = ($baki_perlis / $p_perlis) * 100; echo round($percentage_perlis)."%"; ?></td>
                                        <td><?php $percentage_terengganu = ($baki_terengganu / $p_terengganu) * 100; echo round($percentage_terengganu)."%"; ?></td>
                                        <td><?php $percentage_perak = ($baki_perak / $p_perak) * 100; echo round($percentage_perak)."%"; ?></td>
                                        <td><?php $percentage_johor = ($baki_johor / $p_johor) * 100; echo round($percentage_johor)."%"; ?></td>
                                        <td><?php echo "-" ;// $percentage_selangor = ($baki_selangor / $p_selangor) * 100 ?></td>
                                    </tr>
                                </tbody>
                            </table>
