<select class="custom-select mr-sm-2" id="pub-author" name="pub-author">
                        <option selected value="">Author...</option>
                        <?php foreach ($members as $member):?>
                            <option value=
                                <?= $member->id_member ?> > 
                                <?= $member->member_firstname ?>
                            </option>
                    <?php endforeach;?>
                    </select>