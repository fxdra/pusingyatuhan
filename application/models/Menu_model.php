<?php
class Menu_model extends CI_Model {

    public function get_menu_structure() {
        $menu_items = $this->get_menu_items();
        return $this->build_menu($menu_items);
    }

    private function get_menu_items() {
        $this->db->order_by('parent_id, `sort_order`', 'ASC');
        $query = $this->db->get('menus');
        return $query->result_array();
    }

    private function build_menu($menu_items, $parent_id = NULL) {
        $result = [];
        foreach ($menu_items as $item) {
            if ($item['parent_id'] == $parent_id) {
                $children = $this->build_menu($menu_items, $item['id']);
                if ($children) {
                    $item['children'] = $children;
                }
                $result[] = $item;
            }
        }
        return $result;
    }
}
