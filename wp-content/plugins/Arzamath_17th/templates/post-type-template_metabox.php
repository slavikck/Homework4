<table> 
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Simple text field</label>
        </th>
        <td>
            <input type="text" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Multiselect field</label>
        </th>
        <td>
            <label>hold shift or ctrl to select more than one</label>
            <div class="container">
                <div class="form-group">
                    <select multiple class="form-control" id="1">
                        <option>111111111111111111111</option>
                        <option>222222222222222222222</option>
                        <option>333333333333333333333</option>
                        <option>444444444444444444444</option>
                        <option>555555555555555555555</option>
                        <option>666666666666666666666</option>
                        <option>777777777777777777777</option>
                        <br/>
                    </select>
                </div>
                </form>

            </div>
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Image load field</label>
        </th>
        <td>

            <input type="file" id="meta_c"<?php echo @get_post_meta($post->ID, 'meta_c', true); ?>" />
        </td>
    </tr>
</table>