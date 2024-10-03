<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HHProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('PRAGMA foreign_keys = OFF;');
        DB::table('household_products')->truncate();
           
        $products = array(
            array('pcode' => '1101111010','pname' => 'Basmati rice, WKB [1 Kilogram]','pspecs' => 'Basmati rice, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.20 Kilogram
            Type: Long grain, basmati, white rice (milled rice)
            Packaging: Pre-packed; paper or plastic bag
            Quality: High grade
            Parboiled: No
            Milling: Extra-well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): Yes
            Exclude: Jasmine rice, sticky rice, quick cooking rice
            Specify: Observed quantity and brand'),
            array('pcode' => '1101111020','pname' => 'Broken rice, 25%, BNR [1 Kilogram]','pspecs' => 'Broken rice, 25%, BNR
            Brand: Not relevant
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: White rice (milled rice), broken
            Packaging: Sold loose or plastic foiled
            Parboiled: No
            Share of broken rice: Approximately 25%
            Aromatic (fragrant): No
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice
            Specify: Label, if any'),
            array('pcode' => '1101111030','pname' => 'Brown rice, family pack, BL [5 Kilogram]','pspecs' => 'Brown rice, family pack, BL
            Brand: Brandless
            Preferred quantity: 5
            Quantity range: 4 - 6 Kilogram
            Type: Long grain, brown rice (husked, whole-grain rice)
            Packaging: Pre-packed; paper or plastic bag
            Parboiled: No
            Milling: Hulled (husked)
            Share of broken rice: Low (less than 15%)
            Aromatic (fragrant): No
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice
            Specify: Label, if any, and observed quantity'),
            array('pcode' => '1101111040','pname' => 'Brown rice, loose, BL [1 Kilogram]','pspecs' => 'Brown rice, loose, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Long grain, brown rice (husked, whole-grain rice)
            Packaging: Loose
            Parboiled: No
            Milling: Hulled (husked)
            Share of broken rice: Low (less than 15%)
            Aromatic (fragrant): No
            Variety: Staple
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice)
            Specify: Label, if any'),
            array('pcode' => '1101111050','pname' => 'Jasmine rice, family pack, WKB [5 Kilogram]','pspecs' => 'Jasmine rice, family pack, WKB
            Brand: Well Known
            Preferred quantity: 5
            Quantity range: 4 - 10 Kilogram
            Type: Long grain, jasmine, white rice (milled rice)
            Packaging: Pre-packed; paper or plastic bag
            Quality: High grade
            Parboiled: No
            Milling: Extra-well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): Yes
            Exclude: Basmati rice, sticky rice, quick cooking rice
            Specify: Observed quantity and brand'),
            array('pcode' => '1101111060','pname' => 'Long grain rice, non-parboiled, BNR [10 Kilogram]','pspecs' => 'Long grain rice, non-parboiled, BNR
            Brand: Not relevant
            Preferred quantity: 10
            Quantity range: 10 Kilogram
            Type: Long grain
            Packaging: Loose or common packaging
            Parboiled: No
            Milling: Well-milled
            Share of broken rice: Low (less than 15%)
            Aromatic (fragrant): No
            Variety: Preferred local variety
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice)
            Specify: Label, if any'),
            array('pcode' => '1101111070','pname' => 'Long grain rice, non-parboiled, Prepacked, BL [1 Kilogram]','pspecs' => 'Long grain rice, non-parboiled, Prepacked, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 0.75 - 2 Kilogram
            Type: Long grain
            Packaging: Prepacked; common packaging - plastic or paper
            Parboiled: No
            Milling: Well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Variety: Preferred local variety
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice)
            Specify: Observed quantity and label, if any'),
            array('pcode' => '1101111080','pname' => 'Long grain rice, family pack, BL [5 Kilogram]','pspecs' => 'Long grain rice, family pack, BL
            Brand: Brandless
            Preferred quantity: 5
            Quantity range: 4 - 6 Kilogram
            Type: Long grain
            Packaging: Prepacked; common packaging - plastic or paper
            Parboiled: Any
            Milling: Extra well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Variety: Preferred local variety
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice)
            Specify: Observed quantity and label, if any'),
            array('pcode' => '1101111090','pname' => 'Long-grain rice, not parboiled, WKB [1 Kilogram]','pspecs' => 'Long-grain rice, not parboiled, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.20 Kilogram
            Type: Long grain, white rice (milled rice)
            Packaging: Pre-packed; paper or plastic bag
            Quality: High grade
            Parboiled: No
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice
            Specify: Observed quantity and brand'),
            array('pcode' => '1101111100','pname' => 'Long-grain rice, parboiled, WKB [1 Kilogram]','pspecs' => 'Long-grain rice, parboiled, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.20 Kilogram
            Type: Long grain, white rice (milled rice)
            Packaging: Pre-packed; paper or plastic bag
            Quality: High grade
            Parboiled: Yes
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice
            Specify: Observed quantity and brand'),
            array('pcode' => '1101111110','pname' => 'Medium grain rice, parboiled, BNR [10 Kilogram]','pspecs' => 'Medium grain rice, parboiled, BNR
            Brand: Not relevant
            Preferred quantity: 10
            Quantity range: 10 Kilogram
            Type: Medium grain
            Packaging: Loose or common packaging
            Parboiled: Yes
            Milling: Extra well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Variety: Preferred local variety
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice)
            Specify: Label, if any'),
            array('pcode' => '1101111120','pname' => 'Medium-grain rice, not parboiled, BNR [1 Kilogram]','pspecs' => 'Medium-grain rice, not parboiled, BNR
            Brand: Not relevant
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Medium grain, white rice (milled rice)
            Packaging: Sold loose or plastic foiled
            Parboiled: No
            Milling: Well or reasonably well milled
            Share of broken rice: Low (less than 15%)
            Aromatic (fragrant): No
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice
            Specify: Label, if any'),
            array('pcode' => '1101111130','pname' => 'Premium long grain rice, Prepacked, BL [5 Kilogram]','pspecs' => 'Premium long grain rice, Prepacked, BL
            Brand: Brandless
            Preferred quantity: 5
            Quantity range: 4 - 6 Kilogram
            Type: Long grain
            Packaging: Prepacked; common packaging - plastic or paper
            Parboiled: Any
            Milling: Extra well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): Yes
            Variety: Premium fragrant (Basmati; Jasmine or similar type)
            Specify: Observed quantity and variety and label, if any'),
            array('pcode' => '1101111140','pname' => 'Premium short grain rice, BNR [10 Kilogram]','pspecs' => 'Premium short grain rice, BNR
            Brand: Not relevant
            Preferred quantity: 10
            Quantity range: 10 Kilogram
            Type: Short grain
            Packaging: Packaging
            Parboiled: Any
            Milling: Extra well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Variety: Premium glutinous (Kao Niow; Arborio; Calasparra; or similar type)
            Specify: Observed variety and label, if any'),
            array('pcode' => '1101111150','pname' => 'Premium short grain rice, Prepacked, BL [5 Kilogram]','pspecs' => 'Premium short grain rice, Prepacked, BL
            Brand: Brandless
            Preferred quantity: 5
            Quantity range: 4 - 6 Kilogram
            Type: Short grain
            Packaging: Prepacked; common packaging - plastic or paper
            Parboiled: Any
            Milling: Extra well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Variety: Premium glutinous (Kaoniow; Arborio; Calasparra; or similar type)
            Specify: Observed quantity and variety and label, if any'),
            array('pcode' => '1101111160','pname' => 'Short grain rice, non-parboiled, BNR [10 Kilogram]','pspecs' => 'Short grain rice, non-parboiled, BNR
            Brand: Not relevant
            Preferred quantity: 10
            Quantity range: 10 Kilogram
            Type: Short grain
            Packaging: Loose or common packaging
            Parboiled: No
            Milling: Well-milled
            Share of broken rice: Low (less than 15%)
            Aromatic (fragrant): No
            Variety: Preferred local variety
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice)
            Specify: Label, if any'),
            array('pcode' => '1101111170','pname' => 'Short grain rice, Prepacked, Extra well milled, BL [5 Kilogram]','pspecs' => 'Short grain rice, Prepacked, Extra well milled, BL
            Brand: Brandless
            Preferred quantity: 5
            Quantity range: 4 - 6 Kilogram
            Type: Short grain
            Packaging: Prepacked; common packaging - plastic or paper
            Parboiled: Any
            Milling: Extra well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Variety: Preferred local variety
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice)
            Specify: Observed quantity and label, if any'),
            array('pcode' => '1101111180','pname' => 'Short grain rice, Prepacked, Well-milled, BL [5 Kilogram]','pspecs' => 'Short grain rice, Prepacked, Well-milled, BL
            Brand: Brandless
            Preferred quantity: 5
            Quantity range: 4 - 6 Kilogram
            Type: Short grain
            Packaging: Prepacked; common packaging - plastic or paper
            Parboiled: Any
            Milling: Well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Variety: Preferred local variety
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice)
            Specify: Observed quantity and label, if any'),
            array('pcode' => '1101111190','pname' => 'Short-grain rice, BNR [1 Kilogram]','pspecs' => 'Short-grain rice, BNR
            Brand: Not relevant
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Short grain, white rice
            Packaging: Sold loose or plastic foiled
            Parboiled: No
            Share of broken rice: Below 50%
            Aromatic (fragrant): No
            Exclude: Premium rice (e.g. basmati rice, jasmine rice), sticky rice, quick cooking rice
            Specify: Label, if any'),
            array('pcode' => '1101111200','pname' => 'Sticky rice, WKB [1 Kilogram]','pspecs' => 'Sticky rice, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.5 - 1.0 Kilogram
            Type: Round-grain, short grain, glutinous, Japanese type "sushi rice"
            Packaging: Pre-packed; paper or plastic bag
            Parboiled: No
            Milling: Ordinary milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): No
            Exclude: Basmati rice, jasmine rice, quick cooking rice
            Specify: Observed quantity and brand'),
            array('pcode' => '1101111210','pname' => 'Red rice, WKB [1 Kilogram ]','pspecs' => 'Red rice, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.20 Kilogram
            Type: Long grain, red rice
            Packaging: Pre-packed; paper or plastic bag
            Quality: High grade
            Parboiled: No
            Milling: Extra-well-milled
            Share of broken rice: Very low (less than 5%)
            Aromatic (fragrant): Yes
            Exclude: Jasmine rice, sticky rice, quick cooking rice
            Specify: Brand'),
            array('pcode' => '1101112010','pname' => 'Cake mix, WKB [550 Gram]','pspecs' => 'Cake mix, WKB
            Brand: Well known
            Preferred quantity: 550
            Quantity range: 400 - 600 Gram
            Type: Classic, regular
            Packaging: Prepacked; Box
            Preparation: Uncooked; Add Water/Milk, Eggs, Margarine/Oil
            Specify: Observed quantity and brand'),
            array('pcode' => '1101112020','pname' => 'Corn flour, pre-packed, WKB [1000 Gram]','pspecs' => 'Corn flour, pre-packed, WKB
            Brand: Well Known
            Preferred quantity: 1000
            Quantity range: 750 - 1250 Gram
            Type: Whole grain corn, all-purpose flour
            From: White or yellow corn (maize)
            Packaging: Pre-packed
            Preparation: Uncooked
            Exclude: Cornmeal, coarse flour and grits
            Specify: Observed quantity and brand'),
            array('pcode' => '1101112030','pname' => 'Cornflakes, KELLOGG\'S [500 Gram]','pspecs' => 'Cornflakes, KELLOGG\'S
            Brand: Kellogg\'s
            Preferred quantity: 500
            Quantity range: 250 - 600 Gram
            Type: Corn flakes
            From: Milled corn (maize)
            Packaging: Pre-packed
            Preparation: Ready to eat cereal
            Exclude: Frosted, choco or other special cornflakes
            Specify: Observed quantity'),
            array('pcode' => '1101112040','pname' => 'Cornflakes, Nestle, big pack [500 Gram]','pspecs' => 'Cornflakes, Nestle, big pack
            Brand: Nestle
            Preferred quantity: 500
            Quantity range: 300 - 600 Gram
            Type: Cooked cereal
            From: Corn (maize)
            Packaging: Prepacked; Box
            Preparation: Ready to eat cereal
            Specify: Observed quantity'),
            array('pcode' => '1101112050','pname' => 'Cornflakes, Nestle, small pack [250 Gram]','pspecs' => 'Cornflakes, Nestle, small pack
            Brand: Nestle
            Preferred quantity: 250
            Quantity range: 200 - 300 Gram
            Type: Cooked cereal
            From: Corn (maize)
            Packaging: Prepacked; Box
            Preparation: Ready to eat cereal
            Specify: Observed quantity'),
            array('pcode' => '1101112060','pname' => 'Flour, corn, loose, BL [500 Gram]','pspecs' => 'Flour, corn, loose, BL
            Brand: Brandless
            Preferred quantity: 500
            Quantity range: 500 Gram
            Type: White corn (maize) flour, bleached, medium quality, enriched
            From: Whole grain corn (maize)
            Packaging: Loose or common packaging - plastic or paper
            Preparation: Uncooked
            Exclude: Cornmeal (coarse flour) and grits
            Specify: Brand, if any'),
            array('pcode' => '1101112070','pname' => 'Flour, rice, WKB [600 Gram]','pspecs' => 'Flour, rice, WKB
            Brand: Well known
            Preferred quantity: 600
            Quantity range: 500 - 750 Gram
            From: Rice
            Packaging: Prepacked; common packaging - plastic or paper
            Preparation: Uncooked
            Specify: Observed quantity and brand'),
            array('pcode' => '1101112080','pname' => 'Flour, wheat, loose, BNR [1000 Gram]','pspecs' => 'Flour, wheat, loose, BNR
            Brand: Not relevant
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Unbleached, all-purpose, plain flour (not self-raising flour)
            From: Common wheat
            Packaging: Common packaging - plastic or paper
            Preparation: Uncooked
            Specify: Brand, if any'),
            array('pcode' => '1101112090','pname' => 'Flour, wheat, pre-packed, BL [1000 Gram]','pspecs' => 'Flour, wheat, pre-packed, BL
            Brand: Brandless
            Preferred quantity: 1000
            Quantity range: 750 - 1250 Gram
            Type: Plain, white (bleached), all-purposes
            From: Common wheat
            Packaging: Pre-packed
            Preparation: Uncooked
            Exclude: Self-raising flour
            Specify: Observed quantity and label, if any'),
            array('pcode' => '1101112100','pname' => 'Flour, wholemeal, atta, BL [1000 Gram]','pspecs' => 'Flour, wholemeal, atta, BL
            Brand: Brandless
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Whole grain
            From: Common wheat
            Packaging: Loose or common packaging - plastic or paper
            Preparation: Uncooked
            Specify: Brand, if any'),
            array('pcode' => '1101112110','pname' => 'Corn Maize, BNR [1000 Gram]','pspecs' => 'Corn Maize, BNR
            Brand: BNR
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Corn/maize grains
            From: Maize (corn)
            Packaging: Loose or common packaging - plastic, foiled or paper
            Preparation: Uncooked
            Exclude: Corn on cob, corn meal and corn flour
            Specify: Brand, if any'),
            array('pcode' => '1101112120','pname' => 'Millet, BNR [1000 Gram]','pspecs' => 'Millet, BNR
            Brand: Not relevant
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Whole grain
            Packaging: Loose or common packaging - plastic or paper
            Preparation: Uncooked
            Exclude: Corn on cob, corn meal and corn flour, grounded grains
            Specify: Brand, if any'),
            array('pcode' => '1101112130','pname' => 'Oats, Quaker [500 Gram]','pspecs' => 'Oats, Quaker
            Brand: Quaker
            Preferred quantity: 500
            Quantity range: 300 - 800 Gram
            Type: Cooked cereal; Quick (Instant); rolled oats
            From: Oats
            Packaging: Prepacked; Box
            Preparation: Ready to eat
            Specify: Observed quantity'),
            array('pcode' => '1101112140','pname' => 'Wheat semolina (suji), WKB [1000 Gram]','pspecs' => 'Wheat semolina (suji), WKB
            Brand: Well Known
            Preferred quantity: 1000
            Quantity range: 750 - 1200 Gram
            Type: Wheat semolina
            From: White soft wheat (bread wheat, triticum Aestivum, suji)
            Packaging: Pre-packed
            Preparation: Uncooked
            Exclude: Semolina made from hard wheat such as durum
            Specify: Observed quantity and brand'),
            array('pcode' => '1101112150','pname' => 'Muesli, WKB [550 Gram ]','pspecs' => 'Muesli, WKB
            Brand: Well known
            Preferred quantity: 550
            Quantity range: 400 - 600 Gram
            Type: Classic, regular
            Packaging: Prepacked; Box
            Preparation: Uncooked; Add Water/Milk
            Specify: Observed quantity and brand'),
            array('pcode' => '1101112160','pname' => 'Flour, wholewheat, atta, WKB [1 Kilogram]','pspecs' => 'Flour, wholewheat, atta, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 - 5 Kilogram
            Type: Whole grain
            From: Common wheat
            Packaging: Prepacked; Box, packet
            Specify: Observed quantity and brand'),
            array('pcode' => '1101112170','pname' => 'Pancake mix, WKB [300 Gram ]','pspecs' => 'Pancake mix, WKB
            Brand: Well known
            Preferred quantity: 300
            Quantity range: 200 - 400 Gram
            Type: Classic, regular
            Packaging: Prepacked; Box
            Preparation: Uncooked; Add Water/Milk, Eggs, Margarine/Oil
            Specify: Observed quantity and brand'),
            array('pcode' => '1101112180','pname' => 'Cornflakes, BL [1000 Gram]','pspecs' => 'Cornflakes, BL
            Brand: Brandless
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Millet grains
            Packaging: Sold loose or plastic foiled
            Preparation: Uncooked
            Exclude: Grounded grains, millet flour
            Specify: Label, if any
            Notes: New item'),
            array('pcode' => '1101113010','pname' => 'Bread loaf, sliced, WKB [500 Gram]','pspecs' => 'Bread loaf, sliced, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 300 - 500 Gram
            Type: Sliced white bread, sandwich type
            Packaging: Pre-packed
            Ingredients: Min. 90% high (first) grade wheat (white flour)
            Exclude: Sold loose
            Specify: Observed quantity and brand'),
            array('pcode' => '1101113020','pname' => 'Bread loaf, unsliced, BNR [500 Gram]','pspecs' => 'Bread loaf, unsliced, BNR
            Brand: Not relevant
            Preferred quantity: 500
            Quantity range: 250 - 500 Gram
            Type: White bread loaf with hard crust, not sliced
            Packaging: Sold loose
            Ingredients: Min. 90% high (first) grade wheat (white flour)
            Exclude: Industrially packed
            Specify: Observed quantity and brand, if any'),
            array('pcode' => '1101113030','pname' => 'Bread loaf, unsliced, WKB [500 Gram]','pspecs' => 'Bread loaf, unsliced, WKB
            Brand: Well known
            Preferred quantity: 500
            Quantity range: 250 - 500 Gram
            Type: Fresh, Unsliced white bread, loaf
            Packaging: Pre-packed
            Ingredients: Min. 90% high (first) grade wheat (white flour)
            Exclude: Sold loose
            Specify: Observed brand and quantity'),
            array('pcode' => '1101113040','pname' => 'Bread loaf, whole wheat, BNR [500 Gram]','pspecs' => 'Bread loaf, whole wheat, BNR
            Brand: Not relevant
            Preferred quantity: 500
            Quantity range: 350 - 600 Gram
            Type: Whole wheat bread loaf, not sliced
            Packaging: Sold loose
            Ingredients: Min. 90% whole-wheat
            Exclude: Industrially packed
            Specify: Observed quantity and brand, if any'),
            array('pcode' => '1101113050','pname' => 'Bread roll, prepacked, BNR [300 Gram]','pspecs' => 'Bread roll, prepacked, BNR
            Brand: Not relevant
            Preferred quantity: 300
            Quantity range: 200 - 400 Gram
            Type: Machine-made dinner rolls
            Packaging: Prepacked; common packaging, usually 6 pieces in a pack
            Ingredients: 100% wheat (white flour)
            Exclude: Industrially pre-packed rolls, hand formed rolls
            Specify: Observed quantity and brand, if any'),
            array('pcode' => '1101113060','pname' => 'Bread roll, sold loose, BNR [1 Piece]','pspecs' => 'Bread roll, sold loose, BNR
            Brand: Not relevant
            Preferred quantity: 1
            Quantity range: 1 Piece
            Weight per piece: 50-100 grams
            Type: Machine-made rolls
            Packaging: Sold loose or in a simple bag (not branded)
            Ingredients: Min. 90% wheat (white flour)
            Exclude: Industrially packed, hand formed rolls, sweet rolls
            Specify: Brand, if any'),
            array('pcode' => '1101114010','pname' => 'Biscuits, butter (cookies), WKB [250 Gram]','pspecs' => 'Biscuits, butter (cookies), WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 150 - 300 Gram
            Type: Plain butter cookies
            Packaging: Pre-packed, plastic or foil pack
            Made with: Butter
            Exclude: Cookies (biscuits) with flavors, Danish cookies
            Specify: Observed quantity and brand'),
            array('pcode' => '1101114020','pname' => 'Biscuits, flavored (cookies), WKB [250 Gram]','pspecs' => 'Biscuits, flavored (cookies), WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 200 - 400 Gram
            Type: Flavored cookies
            Packaging: Pre-packed
            Made with: Vegetable fat
            Exclude: Cookies (biscuits) with cocoa flavoring
            Specify: Observed quantity and brand'),
            array('pcode' => '1101114030','pname' => 'Biscuits, sandwich (cookies), WKB [250 Gram]','pspecs' => 'Biscuits, sandwich (cookies), WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 200 - 300 Gram
            Type: 2 layer biscuit with cream filling, any flavor
            Packaging: Pre-packed
            Ingredients: Flour, cream, oil, salt, raising agent, etc.
            Exclude: Cookies (biscuits) with chocolate coating
            Specify: Observed quantity and brand'),
            array('pcode' => '1101114040','pname' => 'Cake, chinese/moon, BNR [50 Gram]','pspecs' => 'Cake, chinese/moon, BNR
            Brand: Not relevant
            Preferred quantity: 50
            Quantity range: 40 - 60 Gram
            Type: Chinese cake, with various filling
            Packaging: Loose or common packaging - plastic or paper
            Size: 1 piece
            Specify: Observed quantity and label, if any'),
            array('pcode' => '1101114050','pname' => 'Cake, chocolate, whole, BL [1000 Gram]','pspecs' => 'Cake, chocolate, whole, BL
            Brand: Brandless
            Preferred quantity: 1000
            Quantity range: 800 - 1500 Gram
            Type: Traditional chocolate cake, whole
            Packaging: Pre-packed
            Ingredients: Wheat flour; chocolate topping
            Made with: Butter
            Exclude: Cakes sold in specialty bakery or café
            Specify: Label, if any'),
            array('pcode' => '1101114060','pname' => 'Cake, cupcakes, BNR [50 Gram]','pspecs' => 'Cake, cupcakes, BNR
            Brand: Not relevant
            Preferred quantity: 50
            Quantity range: 20 - 60 Gram
            Type: Miniature cake, individual serving
            Packaging: Loose or common packaging - plastic or paper
            Ingredients: Butter, sugar, eggs and flour
            Made with: Icing on top, Lightweight
            Size: 1 piece
            Exclude: Cupcakes sold in Cupcake shops
            Specify: Brand, if any and observed quantity'),
            array('pcode' => '1101114070','pname' => 'Cake, sponge, WKB [500 Gram]','pspecs' => 'Cake, sponge, WKB
            Brand: Well known
            Preferred quantity: 500
            Quantity range: 300 - 600 Gram
            Type: Full-size cake, multiple serving
            Packaging: Box
            Ingredients: Whipped eggs, sugar, baking powder, and flour
            Made with: Ordinary butter icing
            Size: 1 piece
            Specify: Brand and observed quantity'),
            array('pcode' => '1101114080','pname' => 'Crackers, cream, WKB [150 Gram]','pspecs' => 'Crackers, cream, WKB
            Brand: Well known
            Preferred quantity: 150
            Quantity range: 100 - 350 Gram
            Type: Plain crackers, with salt
            Packaging: Pre-packed; common packaging
            Ingredients: Wheat flour, yeast
            Specify: Brand and observed quantity'),
            array('pcode' => '1101114090','pname' => 'Crackers, salted, WKB [200 Gram]','pspecs' => 'Crackers, salted, WKB
            Brand: Well Known (such as TUC, RITZ)
            Preferred quantity: 200
            Quantity range: 100 - 300 Gram
            Type: Crackers, with salt
            Packaging: Pre-packed
            Ingredients: Wheat flour
            Exclude: Cream crackers, crackers with poppy, or cheese, bacon, etc. flavoring
            Specify: Brand and observed quantity'),
            array('pcode' => '1101114100','pname' => 'Croissant, all-butter, BNR [1 Piece]','pspecs' => 'Croissant, all-butter, BNR
            Brand: Not relevant
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Puff pastry croissant, no filling
            Packaging: Loose
            Made with: Butter
            Size: Medium
            Specify: Net weight
            Net weight: 50 to 80g'),
            array('pcode' => '1101114110','pname' => 'Doughnuts, loose, BL [20 Gram]','pspecs' => 'Doughnuts, loose, BL
            Brand: Brandless
            Preferred quantity: 20
            Quantity range: 15 - 25 Gram
            Type: Ring fried (oil)
            Packaging: Pre-packed; common packaging
            Ingredients: Wheat flour, yeast
            Made with: Sugar glaze
            Size: 1 piece weighing 15-25 grams
            Specify: Observed quantity and label, if any'),
            array('pcode' => '1101114120','pname' => 'Muffin, WKB [60 Gram]','pspecs' => 'Muffin, WKB
            Brand: Well known
            Preferred quantity: 60
            Quantity range: 45 - 75 Gram
            Type: Plain and compact muffin, individual serving, quick bread
            Packaging: Loose or common packaging - plastic or paper
            Ingredients: Flour, leavening, sugar, and oil
            Size: 1 piece
            Specify: Brand and observed quantity'),
            array('pcode' => '1101114130','pname' => 'Pie, savoury, BNR [50 Gram]','pspecs' => 'Pie, savoury, BNR
            Brand: Not relevant
            Preferred quantity: 50
            Quantity range: 40 - 60 Gram
            Type: Baked pie with vegetable filling
            Packaging: Loose or common packaging - plastic or paper
            Size: 1 piece
            Specify: Observed quantity and label, if any'),
            array('pcode' => '1101114140','pname' => 'Swiss roll, chocolate, WKB [1 slice]','pspecs' => 'Swiss roll, chocolate, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 slice
            Type: containing chocolate cream; sold in bakery/takeaway outlets; sold loose
            Exclude: entire swiss-roll cake
            Specify: Brand'),
            array('pcode' => '1101114150','pname' => 'Cake, Black Forest, WKB, whole [500 Gram]','pspecs' => 'Cake, Black Forest, WKB, whole
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 400 - 600 Gram
            Type: Regular, fresh, black forest cake; bakery (outlet)
            Specify: Brand and observed quantity'),
            array('pcode' => '1101115010','pname' => 'Noodles, dried, WKB [500 Gram]','pspecs' => 'Noodles, dried, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 300 - 600 Gram
            Type: Dried noodles
            Packaging: Pre-packed
            Ingredients: Durum wheat flour, without eggs
            Specify: Brand and observed quantity'),
            array('pcode' => '1101115020','pname' => 'Noodles, egg, WKB [500 Gram]','pspecs' => 'Noodles, egg, WKB
            Brand: Well known
            Preferred quantity: 500
            Quantity range: 200 - 600 Gram
            Type: Dried noodles
            Packaging: Pre-packed; common packaging
            Ingredients: Wheat flour, with eggs
            Exclude: Instant noodle
            Specify: Brand and observed quantity'),
            array('pcode' => '1101115030','pname' => 'Noodles, fresh rice, BL [1000 Gram]','pspecs' => 'Noodles, fresh rice, BL
            Brand: Brandless
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Long-shaped, thin noodles, Fresh or refrigerated
            Packaging: Loose or common packaging - plastic or paper
            Ingredients: Rice flour, without eggs
            Specify: Brand, if any'),
            array('pcode' => '1101115040','pname' => 'Noodles, instant, cup, WKB [75 Gram]','pspecs' => 'Noodles, instant, cup, WKB
            Brand: Well known
            Preferred quantity: 75
            Quantity range: 50 - 90 Gram
            Type: Instant, just add hot water
            Packaging: Pre-packed; Plastic or paper cup
            Ingredients: Chicken flavored
            Exclude: Instant noodles in packet which needs quick cooking or boiling
            Specify: Brand and observed quantity'),
            array('pcode' => '1101115050','pname' => 'Noodles, instant, packet, WKB [80 Gram]','pspecs' => 'Noodles, instant, packet, WKB
            Brand: Well Known
            Preferred quantity: 80
            Quantity range: 60 - 100 Gram
            Type: Instant noodles (add hot water or boil for a few minutes)
            Packaging: Pre-packed, plastic bag
            Ingredients: Wheat flour; without eggs
            Exclude: Noodles in bowl or cup
            Specify: Brand and observed quantity'),
            array('pcode' => '1101115060','pname' => 'Short pasta, WKB [500 Gram]','pspecs' => 'Short pasta, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 300 - 600 Gram
            Type: Short, any shape (such as fusilli, penne, macaroni)
            Packaging: Pre-packed
            Ingredients: Durum wheat flour, without eggs
            Length: Approximately 2-4cm
            Specify: Brand and observed quantity'),
            array('pcode' => '1101115070','pname' => 'Spaghetti, WKB [500 Gram]','pspecs' => 'Spaghetti, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 400 - 600 Gram
            Type: Regular spaghetti (long, straight and round-rod shape)
            Packaging: Pre-packed
            Ingredients: Durum wheat flour, without eggs
            Length: Approximately 30cm
            Exclude: BARILLA spaghetti
            Specify: Brand and observed quantity'),
            array('pcode' => '1101115080','pname' => 'Vermicelli, BL [500 Gram]','pspecs' => 'Vermicelli, BL
            Brand: Brandless
            Preferred quantity: 500
            Quantity range: 400 - 600 Gram
            Type: Thin vermicelli
            Packaging: Pre-packed
            Ingredients: Wheat flour; without eggs
            Specify: Observed quantity and label, if any'),
            array('pcode' => '1101121010','pname' => 'Beef, center brisket [1 Kilogram]','pspecs' => 'Beef, center brisket
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Beef, center brisket
            Status: Fresh
            Composition: Without bones
            Cut: Breast / lower chest (center brisket )'),
            array('pcode' => '1101121020','pname' => 'Beef, cubes for stew or curry [1 Kilogram]','pspecs' => 'Beef, cubes for stew or curry
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Diced or cubed beef
            Status: Fresh
            Composition: Without bones
            Cut: Top half of rear leg (rump steak)
            Exclude: Marinated products'),
            array('pcode' => '1101121030','pname' => 'Beef, fillet, fresh, tenderloin [1 Kilogram]','pspecs' => 'Beef, fillet, fresh, tenderloin
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Beef fillet (a strip of boneless meat)
            Status: Fresh
            Composition: Without bones
            Cut: Middle upper part of loin (tenderloin)
            Fat content: Without fat (trimmed)'),
            array('pcode' => '1101121040','pname' => 'Beef, fillet, frozen, tenderloin [1 Kilogram]','pspecs' => 'Beef, fillet, frozen, tenderloin
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Beef fillet (a strip of boneless meat)
            From: Refer to diagram
            Status: Frozen
            Composition: Without bones
            Cut: Middle upper part of loin (tenderloin)
            Fat content: Without fat (trimmed)
            Exclude: Marinated products
            Specify: Type of outlet priced'),
            array('pcode' => '1101121050','pname' => 'Beef, minced [1 Kilogram]','pspecs' => 'Beef, minced
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: 100% minced beef (ground beef)
            Status: Fresh
            Cut: Any cut or mixed from different cuts
            Fat content: Low (8 - 15%)
            Exclude: "Beef tartar" from fillet, mixed minced meat'),
            array('pcode' => '1101121060','pname' => 'Beef, round steak [1 Kilogram]','pspecs' => 'Beef, round steak
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Beef round steak
            From: Refer to diagram
            Status: Fresh
            Composition: Without bones
            Cut: Any cut or mixed from different cuts
            Fat content: Low (8 - 15%)
            Exclude: Marinated products
            Specify: Type of outlet priced'),
            array('pcode' => '1101121070','pname' => 'Beef, rump steak [1 Kilogram]','pspecs' => 'Beef, rump steak
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Beef steak
            Status: Fresh
            Composition: Without bones
            Cut: Top half of rear leg (rump)'),
            array('pcode' => '1101121080','pname' => 'Beef, sirloin steak [1 Kilogram]','pspecs' => 'Beef, sirloin steak
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Beef sirloin steak
            From: Refer to diagram
            Status: Fresh
            Composition: Without bones
            Cut: Any cut or mixed from different cuts
            Fat content: Low (8 - 15%)
            Exclude: Marinated products
            Specify: Type of outlet priced'),
            array('pcode' => '1101121090','pname' => 'Beef, with bones, non-specific cut [1 Kilogram]','pspecs' => 'Beef, with bones, non-specific cut
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Beef with bones, without offal
            Status: Fresh
            Composition: With bones
            Cut: Without special distinction of different parts'),
            array('pcode' => '1101121100','pname' => 'Beef, without bones, non-specific cut [1 Kilogram]','pspecs' => 'Beef, without bones, non-specific cut
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Non-specific cuts
            Status: Fresh
            Composition: Without bones
            Cut: Without special distinction of different parts
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101121110','pname' => 'Buffalo, without bones, non-specific cut [1 Kilogram]','pspecs' => 'Buffalo, without bones, non-specific cut
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Non-specific cuts
            Status: Fresh
            Composition: Without bones
            Cut: Without special distinction of different parts
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101121120','pname' => 'Veal, chops [1 Kilogram]','pspecs' => 'Veal, chops
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Veal chops
            From: Young animal whose source of nutrition is mother\'s milk
            Status: Fresh
            Composition: With bones
            Cut: Regular chops
            Fat content: Regular (16 - 22%)'),
            array('pcode' => '1101121130','pname' => 'Veal, with bones [1 Kilogram]','pspecs' => 'Veal, with bones
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Veal for stew
            From: Veal (or Calf) Under 6 months
            Status: Fresh
            Composition: With bones
            Cut: Without special distinction of different parts
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101121140','pname' => 'Beef burgers, fresh [1 Kilogram]','pspecs' => 'Beef burgers, fresh
            Preferred quantity: 1
            Quantity range: 1 - 1 Kilogram
            Type: 100% minced beef (ground beef)
            Status: Fresh
            Cut: Any cut or mixed from different cuts
            Exclude: "Beef tartar" from fillet, mixed minced meat
            Notes: New item'),
            array('pcode' => '1101122010','pname' => 'Pork, fillet [1 Kilogram]','pspecs' => 'Pork, fillet
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Pork fillet (a strip of boneless meat)
            Status: Fresh
            Composition: Without bones'),
            array('pcode' => '1101122020','pname' => 'Pork, loin chop [1 Kilogram]','pspecs' => 'Pork, loin chop
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Pork loin chop
            Status: Fresh
            Composition: With bones
            Exclude: Pork loin steak'),
            array('pcode' => '1101122030','pname' => 'Pork, loin, without bones [1 Kilogram]','pspecs' => 'Pork, loin, without bones
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Loin
            Status: Fresh
            Composition: Without bones
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101122040','pname' => 'Pork, ribs [1 Kilogram]','pspecs' => 'Pork, ribs
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Pork ribs
            Status: Fresh
            Composition: With bones
            Exclude: Marinated ribs'),
            array('pcode' => '1101122050','pname' => 'Pork, shoulder [1 Kilogram]','pspecs' => 'Pork, shoulder
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Pork shoulder, for roasting
            Status: Fresh
            Composition: With bones'),
            array('pcode' => '1101122060','pname' => 'Pork, thigh, with bones [1 Kilogram]','pspecs' => 'Pork, thigh, with bones
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Thigh
            Status: Fresh
            Composition: With bones
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101122070','pname' => 'Pork, with bones, non-specific cut [1 Kilogram]','pspecs' => 'Pork, with bones, non-specific cut
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Non-specific cuts
            Status: Fresh
            Composition: With bones
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101122080','pname' => 'Pork, without bones, non-specific cut [1 Kilogram]','pspecs' => 'Pork, without bones, non-specific cut
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Non-specific cuts
            Status: Fresh
            Composition: Without bones
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101123010','pname' => 'Goat leg [1 Kilogram]','pspecs' => 'Goat leg
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Goat leg, shank half
            From: Young goat
            Status: Fresh
            Composition: With bones
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101123020','pname' => 'Goat, mixed cut, with bones [1 Kilogram]','pspecs' => 'Goat, mixed cut, with bones
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Diced or cubed goat
            Status: Fresh
            Composition: With bones
            Cut: Mixed parts
            Animal: Young goat
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101123030','pname' => 'Lamb, chops [1 Kilogram]','pspecs' => 'Lamb, chops
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Lamb chops
            From: Young sheep
            Status: Fresh
            Composition: With bones
            Cut: Middle loin
            Exclude: Milk lamb
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101123040','pname' => 'Lamb, whole leg [1 Kilogram]','pspecs' => 'Lamb, whole leg
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Lamb leg, whole hindquarters
            From: Young sheep
            Status: Fresh
            Composition: With bones
            Exclude: Milk lamb
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101123050','pname' => 'Mutton chops [1 Kilogram]','pspecs' => 'Mutton chops
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Mutton, chops
            From: Adult sheep
            Status: Fresh
            Composition: With bones
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101123060','pname' => 'Mutton, mixed cut [1 Kilogram]','pspecs' => 'Mutton, mixed cut
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Diced or cubed mutton
            From: Adult sheep
            Status: Fresh
            Composition: Without bones
            Cut: Mixed parts
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101124010','pname' => 'Chicken, breast without skin and bones [1 Kilogram]','pspecs' => 'Chicken, breast without skin and bones
            Preferred quantity: 1
            Quantity range: 0.8 - 1.2 Kilogram
            Type: Whole chicken breast
            Status: Fresh
            Composition: Without bones
            Breeding: Caged (industrial)
            Exclude: Free range
            Specify: Observed quantity'),
            array('pcode' => '1101124020','pname' => 'Chicken, legs [1 Kilogram]','pspecs' => 'Chicken, legs
            Preferred quantity: 1
            Quantity range: 0.8 - 1.2 Kilogram
            Type: Whole legs (drumsticks and thighs)
            Status: Fresh
            Composition: With bones
            Breeding: Caged (industrial)
            Exclude: Free range
            Specify: Observed quantity'),
            array('pcode' => '1101124030','pname' => 'Chicken, wings [1 Kilogram]','pspecs' => 'Chicken, wings
            Preferred quantity: 1
            Quantity range: 0.8 - 1.2 Kilogram
            Type: Wings
            Status: Fresh or chilled
            Composition: With bones
            Breeding: Caged (industrial)
            Exclude: Free range
            Specify: Outlet type where item was priced and observed quantity'),
            array('pcode' => '1101124040','pname' => 'Chicken, non-specific cuts, fresh [1 Kilogram]','pspecs' => 'Chicken, non-specific cuts, fresh
            Preferred quantity: 1
            Quantity range: 0.8 - 1.2 Kilogram
            Type: Mixed, non-specific cuts
            Status: Fresh or chilled
            Composition: With bones
            Breeding: Caged (industrial)
            Exclude: Free range
            Specify: Outlet type where item was priced and observed quantity'),
            array('pcode' => '1101124050','pname' => 'Chicken, non-specific cuts, frozen [1 Kilogram]','pspecs' => 'Chicken, non-specific cuts, frozen
            Preferred quantity: 1
            Quantity range: 0.8 - 1.2 Kilogram
            Type: Mixed, non-specific cuts
            Status: Frozen
            Composition: With bones
            Breeding: Caged (industrial)
            Exclude: Free range
            Specify: Outlet type where item was priced and observed quantity'),
            array('pcode' => '1101124060','pname' => 'Chicken, whole, fresh [1 Kilogram]','pspecs' => 'Chicken, whole, fresh
            Preferred quantity: 1
            Quantity range: 0.8 - 1.5 Kilogram
            Type: Standard whole chicken
            Status: Fresh
            Composition: With bones, no offal
            Breeding: Caged (industrial)
            Preparation: Plucked and gutted
            Exclude: Free range
            Specify: Observed quantity'),
            array('pcode' => '1101124070','pname' => 'Chicken, whole, frozen [1 Kilogram]','pspecs' => 'Chicken, whole, frozen
            Preferred quantity: 1
            Quantity range: 0.8 - 1.5 Kilogram
            Type: Standard whole chicken
            Status: Frozen
            Composition: With bones, no offal
            Breeding: Caged (industrial)
            Preparation: Plucked and gutted
            Exclude: Free range
            Specify: Observed quantity'),
            array('pcode' => '1101124080','pname' => 'Chicken, whole, live [1 Kilogram]','pspecs' => 'Chicken, whole, live
            Preferred quantity: 1
            Quantity range: 0.8 - 1.5 Kilogram
            Type: Live bird
            Status: Live
            Breeding: Caged (industrial)
            Exclude: Free range
            Specify: Observed quantity'),
            array('pcode' => '1101124090','pname' => 'Chicken, whole, native, fresh [1 Kilogram]','pspecs' => 'Chicken, whole, native, fresh
            Preferred quantity: 1
            Quantity range: 0.8 - 1.5 Kilogram
            Type: Standard whole chicken
            Status: Fresh or chilled
            Composition: With bones, no offal
            Breeding: Caged (industrial)
            Preparation: Plucked and gutted
            Exclude: Free range
            Specify: Outlet type where item was priced and observed quantity'),
            array('pcode' => '1101124100','pname' => 'Duck, whole, fresh [4 Kilogram]','pspecs' => 'Duck, whole, fresh
            Preferred quantity: 4
            Quantity range: 3 - 5 Kilogram
            Type: Standard whole duck
            Status: Fresh or chilled
            Breeding: Free range
            Specify: Outlet type where item was priced and observed quantity'),
            array('pcode' => '1101125010','pname' => 'Breakfast sausage, chicken, BNR [1 Kilogram]','pspecs' => 'Breakfast sausage, chicken, BNR
            Brand: Not relevant
            Preferred quantity: 1.0
            Quantity range: 0.80 - 1.20 Kilogram
            Type: Breakfast style, mildly seasoned, skinless
            Status: Refrigerated or frozen
            Packaging: Loose or common packaging, more or less 28 pieces
            Specify: Type of outlet where item was priced and observed quantity'),
            array('pcode' => '1101125020','pname' => 'Corned beef, WKB [0.40 Kilogram]','pspecs' => 'Corned beef, WKB
            Brand: Well Known
            Preferred quantity: 0.40
            Quantity range: 0.30 - 0.50 Kilogram
            Type: Corned beef chunks, pre-cooked
            Packaging: Pre-packed; can
            Specify: Brand and observed quantity'),
            array('pcode' => '1101125030','pname' => 'Liver, beef, BNR [1 Kilogram]','pspecs' => 'Liver, beef, BNR
            Brand: Not relevant
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Cow liver
            Status: Fresh
            Packaging: Sold loose'),
            array('pcode' => '1101125040','pname' => 'Liver, mutton/goat, BNR [1 Kilogram]','pspecs' => 'Liver, mutton/goat, BNR
            Brand: Not relevant
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Liver from adult goat
            Status: Fresh
            Packaging: Sold loose
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101125050','pname' => 'Liver, pork, BNR [1 Kilogram]','pspecs' => 'Liver, pork, BNR
            Brand: Not relevant
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Pig liver
            Status: Fresh
            Packaging: Sold loose
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101125060','pname' => 'Pork bacon, smoked, WKB [0.20 Kilogram]','pspecs' => 'Pork bacon, smoked, WKB
            Brand: Well Known
            Preferred quantity: 0.20
            Quantity range: 0.15 - 0.25 Kilogram
            Type: Smoked bacon, sliced, with fat
            Packaging: Pre-packed; vacuum packed
            Specify: Brand and observed quantity'),
            array('pcode' => '1101125070','pname' => 'Pork ham, sliced, WKB [0.10 Kilogram]','pspecs' => 'Pork ham, sliced, WKB
            Brand: Well known
            Preferred quantity: 0.10
            Quantity range: 0.10 - 0.20 Kilogram
            Type: Sliced pork
            Status: Refrigerated or frozen
            Packaging: Loose or common packaging
            Specify: Type of outlet where item was priced and observed quantity and brand'),
            array('pcode' => '1101125080','pname' => 'Chicken sausage, BNR [400 Gram]','pspecs' => 'Chicken sausage, BNR
            Brand: Not relevant
            Preferred quantity: 400
            Quantity range: 300 - 500 Gram
            Status: Refrigerated or frozen
            Packaging: Pre-packed, 10-12 pieces
            Specify: Type of outlet where item was priced and observed quantity'),
            array('pcode' => '1101131010','pname' => 'Carp, fresh [1 Kilogram]','pspecs' => 'Carp, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish with head and tail
            Status: Fresh
            Packaging: Sold loose
            Species: Common carp (Cyprinus carpio)
            Preparation: Not gutted, not cleaned
            Weight per piece: Approximately 1000 g'),
            array('pcode' => '1101131020','pname' => 'Catfish, fresh [1 Kilogram]','pspecs' => 'Catfish, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish, with skin and head
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Specify
            Preparation: Not gutted, not cleaned
            Weight per piece: Specify
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131030','pname' => 'Crab, mudcrab, fresh [1 Kilogram]','pspecs' => 'Crab, mudcrab, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Scylla serrata
            Preparation: Uncooked
            Weight per piece: Specify
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131040','pname' => 'Crab, seacrab, fresh [1 Kilogram]','pspecs' => 'Crab, seacrab, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole sea crab
            Status: Fresh
            Packaging: Sold loose
            Weight per piece: 200-300 g'),
            array('pcode' => '1101131050','pname' => 'Mackerel, fresh [1 Kilogram]','pspecs' => 'Mackerel, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish with head and tail
            Status: Fresh
            Packaging: Sold loose
            Species: Atlantic Spanish mackerel (Scomberomorus maculatus) or similar species in the Family Scombridae; Atlantic mackerel (Scomber scombrus), Chub mackerel (Scomber japonicus), Blue mackerel (Scomber australasicus)
            Preparation: Not gutted, not cleaned'),
            array('pcode' => '1101131060','pname' => 'Mullet, fresh [1 Kilogram]','pspecs' => 'Mullet, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish, with skin and head
            Status: Fresh
            Packaging: Sold loose
            Species: Grey Mullet (Mugil cephalus) or Red Mullet (Mullus barbatus or Mullus surmuletus)
            Preparation: Not gutted, not cleaned
            Weight per piece: 200-400 g'),
            array('pcode' => '1101131070','pname' => 'Pomfret, black, fresh [1 Kilogram]','pspecs' => 'Pomfret, black, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish, with skin and head
            Status: Fresh
            Packaging: Sold loose
            Species: Parastromateus niger
            Preparation: Not gutted, not cleaned
            Weight per piece: 150-200 g'),
            array('pcode' => '1101131080','pname' => 'Pomfret, white, fresh [1 Kilogram]','pspecs' => 'Pomfret, white, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish, with skin and head
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Pampus argenteus
            Preparation: Not gutted, not cleaned
            Specify: Weight per piece; Type of outlet where item was priced'),
            array('pcode' => '1101131090','pname' => 'Red snapper, fresh [1 Kilogram]','pspecs' => 'Red snapper, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish, with skin and head
            Status: Fresh
            Packaging: Sold loose
            Species: Lutjanus campechanus
            Preparation: Not gutted, not cleaned
            Weight per piece: Approximately 500 g'),
            array('pcode' => '1101131100','pname' => 'Sea lobster, fresh [1 Kilogram]','pspecs' => 'Sea lobster, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Specify
            Preparation: Uncooked
            Weight per piece: Specify
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131110','pname' => 'Prawns/shrimps, medium, fresh [1 Kilogram]','pspecs' => 'Prawns/shrimps, medium, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Specify
            Preparation: Uncooked
            Length per piece: (Head to tail) 15-20cm
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131120','pname' => 'Prawns/shrimps, small, fresh [1 Kilogram]','pspecs' => 'Prawns/shrimps, small, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Specify
            Preparation: Uncooked
            Length per piece: (Head to tail) 8-10cm
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131130','pname' => 'Prawns/shrimps, peeled, frozen [1 Kilogram]','pspecs' => 'Prawns/shrimps, peeled, frozen
            Preferred quantity: 1 Kilogram
            Type: Peeled shrimp without head and tail
            Status: Frozen
            Packaging: Pre-packed; 60-100 pieces per kg
            Species: Pandalus borealis
            Preparation: Uncooked
            Length per piece: Approximately 3 cm'),
            array('pcode' => '1101131140','pname' => 'Small fish, fresh [1 Kilogram]','pspecs' => 'Small fish, fresh
            Preferred quantity: 1 Kilogram
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Specify
            Preparation: Not gutted, not cleaned
            Weight per piece: Specify
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131150','pname' => 'Sole, fresh [1 Kilogram]','pspecs' => 'Sole, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish, with skin and head
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Specify
            Preparation: Not gutted, not cleaned
            Weight per piece: Specify
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131160','pname' => 'Spanish mackerel, fresh [1 Kilogram]','pspecs' => 'Spanish mackerel, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish, with skin and head
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Specify
            Preparation: Not gutted, not cleaned
            Weight per piece: Specify
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131170','pname' => 'Squid, medium, fresh [1 Kilogram]','pspecs' => 'Squid, medium, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole squid with arms
            Status: Fresh
            Packaging: Sold loose
            Species: Loligo vulgaris
            Preparation: Gutted and cleaned
            Weight per piece: 200-300 g'),
            array('pcode' => '1101131180','pname' => 'Squid, small, fresh [1 Kilogram]','pspecs' => 'Squid, small, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Specify
            Preparation: Uncooked
            Length per piece: (Body length) 10-12 cm
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131190','pname' => 'Tilapia, fresh [1 Kilogram]','pspecs' => 'Tilapia, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole fish, with skin and head
            Status: Fresh
            Packaging: Sold loose
            Species: Tilapiine cichlids
            Preparation: Not gutted, not cleaned
            Weight per piece: 200-300 g'),
            array('pcode' => '1101131200','pname' => 'Tuna, fresh [1 Kilogram]','pspecs' => 'Tuna, fresh
            Preferred quantity: 1 Kilogram
            Type: Whole tuna
            Status: Fresh or chilled
            Packaging: Sold loose
            Species: Specify
            Preparation: Not gutted, not cleaned
            Weight per piece: Specify
            Specify: Type of outlet where item was priced'),
            array('pcode' => '1101131210','pname' => 'Tuna, steaks, fresh [1 Kilogram]','pspecs' => 'Tuna, steaks, fresh
            Preferred quantity: 1 Kilogram
            Type: Steak, sliced, and cleaned
            Status: Fresh
            Packaging: Sold loose or plastic wrapped
            Species: Skipjack Tuna (Katsuwonus Pelamis)
            Preparation: Gutted and cleaned
            Weight per piece: 800-1800 g
            Exclude: Yellowfin'),
            array('pcode' => '1101132010','pname' => 'Dried shrimps, BNR [1000 Gram]','pspecs' => 'Dried shrimps, BNR
            Brand: Not relevant
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Shrimp (prawn)
            Packaging: Sold loose
            Preparation: Dried with shell, head and tail
            Length: Head to tail length of 1.5-2.0 cm'),
            array('pcode' => '1101132020','pname' => 'Fishball, BNR [1000 Gram]','pspecs' => 'Fishball, BNR
            Brand: Not relevant
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: From Cod or similar fish
            Packaging: Prepacked; Plastic
            Preparation: Processed
            Specify: Type of fish'),
            array('pcode' => '1101132030','pname' => 'Mackerel fillet, tinned, in vegetable oil, WKB [150 Gram]','pspecs' => 'Mackerel fillet, tinned, in vegetable oil, WKB
            Brand: Well Known
            Preferred quantity: 150
            Quantity range: 100 - 200 Gram
            Type: Mackerel fillet in vegetable oil
            Packaging: Pre-packed; tin
            Preparation: Chunks
            Exclude: Mackerel in olive oil
            Specify: Brand and observed quantity'),
            array('pcode' => '1101132040','pname' => 'Salted and semi-dried fish, BL [1000 Gram]','pspecs' => 'Salted and semi-dried fish, BL
            Brand: Brandless
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Cod or similar fish
            Packaging: Prepacked; Plastic
            Preparation: Processed
            Specify: Type of fish'),
            array('pcode' => '1101132050','pname' => 'Sardines, tinned, with skin, in vegetable oil, WKB [100 Gram]','pspecs' => 'Sardines, tinned, with skin, in vegetable oil, WKB
            Brand: Well Known
            Preferred quantity: 100
            Quantity range: 80 - 155 Gram
            Type: Sardines in vegetable oil
            Packaging: Pre-packed; tin
            Preparation: Whole; without head, with bones
            Exclude: Sardines in olive oil
            Specify: Brand and observed quantity'),
            array('pcode' => '1101132060','pname' => 'Tuna flakes, tinned, WKB [200 Gram]','pspecs' => 'Tuna flakes, tinned, WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 150 - 250 Gram
            Type: Tuna in vegetable oil or natural juice
            Packaging: Pre-packed; tin
            Preparation: Chunks, without bones
            Exclude: Tuna in olive oil
            Specify: Brand and observed quantity'),
            array('pcode' => '1101132070','pname' => 'Tuna loins, smoked, WKB [1000 Gram]','pspecs' => 'Tuna loins, smoked, WKB
            Brand: Well Known
            Preferred quantity: 1000
            Quantity range: 500 - 1500 Gram
            Type: smoked tuna
            Packaging: vacuum packed
            Specify: Brand and observed quantity'),
            array('pcode' => '1101141010','pname' => 'Buffalo milk, not pasteurized, BL [1 Liter]','pspecs' => 'Buffalo milk, not pasteurized, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 0.5 - 1.2 Liter
            Type: Buffalo whole milk, fresh, not pasteurized, not reconstituted, not fortified
            Packaging: Pre-packed
            Processing: Ultra High Temperature (UHT)
            Fat content: Natural (3-4%)
            Exclude: Fortified milk, flavored milk
            Specify: Brand (if any) and observed quantity'),
            array('pcode' => '1101141020','pname' => 'Milk, fresh, low-fat, WKB [1 Liter]','pspecs' => 'Milk, fresh, low-fat, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.5 - 1.5 Liter
            Type: Cow milk, fresh, semi-skimmed (low-fat) milk
            Packaging: Pre-packed
            Processing: Pasteurized; High-temperature Short-time (HTST)
            Fat content: Reduced (1-2%)
            Exclude: Fortified milk, flavored milk, UHT milk, skimmed (zero fat) milk
            Specify: Brand and observed quantity'),
            array('pcode' => '1101141030','pname' => 'Milk, fresh, unskimmed, WKB [1 Liter]','pspecs' => 'Milk, fresh, unskimmed, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.5 - 1.5 Liter
            Type: Cow milk, fresh, un-skimmed (whole milk)
            Packaging: Pre-packed
            Processing: Pasteurized; HTST (High Temperature/Short Time) treatment
            Fat content: Natural (3-4%)
            Exclude: Fortified milk, flavored milk, UHT (Ultra-high temperature) milk
            Specify: Brand and observed quantity'),
            array('pcode' => '1101141040','pname' => 'Milk, UHT, unskimmed, WKB [1 Liter]','pspecs' => 'Milk, UHT, unskimmed, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.5 - 1.5 Liter
            Type: Cow milk, fresh, un-skimmed (whole milk)
            Packaging: Pre-packed
            Processing: Ultra High Temperature (UHT)
            Fat content: Natural (3-4%)
            Exclude: Fortified milk, flavored milk
            Specify: Brand and observed quantity'),
            array('pcode' => '1101142010','pname' => 'Coffee whitener, jar, Nestle [400 Gram]','pspecs' => 'Coffee whitener, jar, Nestle
            Brand: Nestle
            Preferred quantity: 400
            Quantity range: 350 - 450 Gram
            Type: Powder creamer for coffee
            Packaging: Pre-packed; plastic or glass jar
            Exclude: Adult milk
            Specify: Observed quantity'),
            array('pcode' => '1101142020','pname' => 'Coffee whitener, packet, Nestle [450 Gram]','pspecs' => 'Coffee whitener, packet, Nestle
            Brand: Nestle
            Preferred quantity: 450
            Quantity range: 400 - 500 Gram
            Type: Powder creamer for coffee
            Packaging: Pre-packed; packet or foil pack
            Exclude: Adult milk
            Specify: Observed quantity'),
            array('pcode' => '1101142030','pname' => 'Infant powdered milk, 1000 grams, WKB [1000 Gram]','pspecs' => 'Infant powdered milk, 1000 grams, WKB
            Brand: Well known
            Preferred quantity: 1000
            Quantity range: 800 - 1200 Gram
            Type: Powdered, baby milk
            Packaging: Pre-packed; tin
            Specify: Brand and observed quantity'),
            array('pcode' => '1101142040','pname' => 'Infant powdered milk, 400 grams, WKB [400 Gram]','pspecs' => 'Infant powdered milk, 400 grams, WKB
            Brand: Well known
            Preferred quantity: 400
            Quantity range: 300 - 600 Gram
            Type: Powdered, baby milk
            Packaging: Pre-packed; box
            Specify: Brand and observed quantity'),
            array('pcode' => '1101142050','pname' => 'Milk, powdered, WKB [400 Gram]','pspecs' => 'Milk, powdered, WKB
            Brand: Well Known
            Preferred quantity: 400
            Quantity range: 300 - 600 Gram
            Type: Dry powdered milk for ages 4+
            Packaging: Pre-packed; tin or box
            Source: Cow milk, un-skimmed (whole milk)
            Exclude: Powdered milk for babies
            Specify: Brand'),
            array('pcode' => '1101142060','pname' => 'Sweet milk, condensed, WKB [400 Gram]','pspecs' => 'Sweet milk, condensed, WKB
            Brand: Well Known
            Preferred quantity: 400
            Quantity range: 200 - 500 Gram
            Type: Sweet milk, very thick, un-skimmed, sweetened with sugar
            Packaging: Pre-packed; tin
            Source: Cow milk, un-skimmed (whole milk)
            Fat content: Approximately 8%
            Specify: Brand'),
            array('pcode' => '1101142070','pname' => 'Yoghurt drink, WKB [150 Gram]','pspecs' => 'Yoghurt drink, WKB
            Brand: Well known
            Preferred quantity: 150
            Quantity range: 100 - 250 Gram
            Type: Plain (natural) yoghurt drink
            Packaging: Pre-packed; plastic cup or container
            Exclude: Sweetened yoghurt, flavored yoghurt, organic yoghurt
            Specify: Brand and observed quantity'),
            array('pcode' => '1101142080','pname' => 'Yoghurt, fruit, WKB [200 Gram]','pspecs' => 'Yoghurt, fruit, WKB
            Brand: Well known
            Preferred quantity: 200
            Quantity range: 100 -300 Gram
            Type: Fruit flavored yoghurt
            Packaging: Pre-packed; plastic cup container
            Source: Cow milk, unskimmed (whole milk)
            Fat content: Regular (2-5%)
            Exclude: Natural, organic, with bifidus, greek and skyr yoghurts
            Specify: Brand and observed quantity'),
            array('pcode' => '1101142090','pname' => 'Yoghurt, plain, WKB [150 Gram]','pspecs' => 'Yoghurt, plain, WKB
            Brand: Well Known
            Preferred quantity: 150
            Quantity range: 100 - 300 Gram
            Type: Plain (natural) yoghurt
            Packaging: Pre-packed; plastic cup or container
            Source: Cow milk, un-skimmed (whole milk)
            Fat content: Regular (2-5%)
            Exclude: Sweetened, flavored, organic, greek and skyr yoghurts
            Specify: Brand and observed quantity'),
            array('pcode' => '1101142100','pname' => 'Adult milk, powdered, WKB [800 Gram]','pspecs' => 'Adult milk, powdered, WKB
            Brand: Well known brand
            Preferred quantity: 800
            Quantity range: 500 - 1200 Gram
            Type: Powdered milk for adults
            Packaging: Pre-packed; box or pouch
            Exclude: Milk powder for babies; milk supplements for senior citizens or glucose management, etc
            Specify: Brand, observed quantity, and country'),
            array('pcode' => '1101143010','pname' => 'Cheese spread, WKB [200 Gram]','pspecs' => 'Cheese spread, WKB
            Brand: Well known
            Preferred quantity: 200
            Quantity range: 100 - 300 Gram
            Type: Processed, spreadable cheese
            Packaging: Pre-packaged; common packaging
            Source: Cow milk
            Fat content: 40 - 60 %
            Exclude: Flavored spreads (i.e. garlic, spices, herbs), light or no fat spreads
            Specify: Country of origin'),
            array('pcode' => '1101143020','pname' => 'Cheese, cheddar type, WKB [180 Gram]','pspecs' => 'Cheese, cheddar type, WKB
            Brand: Well Known
            Preferred quantity: 180
            Quantity range: 150 - 300 Gram
            Type: Pale yellow, hard or semi-hard cheddar cheese
            Packaging: Pre-packed, Block cheese
            Source: Cow\'s milk
            Fat content: 40 - 50% (in dry substance)
            Aging: Less than 3 years
            Exclude: Specially treated cheese
            Specify: Brand, country of origin'),
            array('pcode' => '1101143030','pname' => 'Cheese, local, WKB [250 Gram]','pspecs' => 'Cheese, local, WKB
            Brand: Well known
            Preferred quantity: 250
            Quantity range: 200 - 500 Gram
            Type: Fresh white, wet cheese
            Packaging: Pre-packaged; common packaging
            Specify: Brand, observed quantity'),
            array('pcode' => '1101143040','pname' => 'Cheese, processed, WKB [200 Gram]','pspecs' => 'Cheese, processed, WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 140 - 250 Gram
            Type: Sliced; yellow/orange color, medium firm consistency, made by blending two or more varieties of cheese
            Packaging: Pre-packed; 8-12 individually wrapped slices in a package
            Source: Cow\'s milk
            Fat content: 40-50%
            Specify: Brand, country of origin, number of slices'),
            array('pcode' => '1101143050','pname' => 'Cream cheese, WKB [200 Gram]','pspecs' => 'Cream cheese, WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 100 - 400 Gram
            Type: Soft, spreadable, white cheese
            Packaging: Pre-packed
            Source: Cow\'s milk
            Fat content: 40-60%
            Specify: Brand, country of origin, observed quantity'),
            array('pcode' => '1101144010','pname' => 'Chicken egg, caged hen, large size, sold loose [1 Piece]','pspecs' => 'Chicken egg, caged hen, large size, sold loose
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: From industrially bred (caged) hen
            Packaging: Loose
            Weight per piece: Approximately 65 g
            Specify: Weight, size of egg'),
            array('pcode' => '1101144020','pname' => 'Chicken eggs, caged hen, large size, prepacked [6 Piece]','pspecs' => 'Chicken eggs, caged hen, large size, prepacked
            Preferred quantity: 6
            Quantity range: 4 - 12 Piece
            Type: From industrially bred (caged) hen
            Packaging: Pre-packed
            Weight per piece: 63-72 g
            Specify: Weight, size of egg, observed quantity'),
            array('pcode' => '1101144030','pname' => 'Chicken eggs, caged hen, medium size [6 Piece]','pspecs' => 'Chicken eggs, caged hen, medium size
            Preferred quantity: 6
            Quantity range: 4 - 12 Piece
            Type: From industrially bred (caged) hen
            Packaging: Pre-packed
            Weight per piece: 53-62 g
            Specify: Weight, size of egg, observed quantity'),
            array('pcode' => '1101144040','pname' => 'Salted duck egg [1 Piece]','pspecs' => 'Salted duck egg
            Preferred quantity: 1
            Quantity range: 1 - 4 Piece
            Type: Duck eggs, salted, infertile
            Packaging: Loose
            Weight per piece: Approximately 75 g
            Specify: Weight, size of egg, observed quantity'),
            array('pcode' => '1101144050','pname' => 'Chicken eggs, traditionally bred, sold loose [6 Piece]','pspecs' => 'Chicken eggs, traditionally bred, sold loose
            Preferred quantity: 6
            Quantity range: 4 - 12 Piece
            Type: From traditionally bred hen
            Packaging: Sold loose
            Weight per piece: 63-72 g (S)
            Specify: Weight, size of egg, observed quantity
            Notes: New item'),
            array('pcode' => '1101151010','pname' => 'Butter, salted, WKB [250 Gram]','pspecs' => 'Butter, salted, WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 200 - 500 Gram
            Type: Salted butter, hard block
            Packaging: Pre-packed; paper, aluminum or plastic container
            Source: Pasteurized cow milk
            Salt content: With salt (less than 2%)
            Specify: Brand and observed quantity'),
            array('pcode' => '1101151020','pname' => 'Butter, unsalted, WKB [250 Gram]','pspecs' => 'Butter, unsalted, WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 200 - 500 Gram
            Type: Unsalted butter, hard block
            Packaging: Pre-packed; paper, aluminum or plastic container
            Source: Pasteurized cow milk
            Salt content: Unsalted
            Specify: Brand and observed quantity'),
            array('pcode' => '1101151030','pname' => 'Ghee, cow/buffalo, WKB [250 Gram]','pspecs' => 'Ghee, cow/buffalo, WKB
            Brand: Well known
            Preferred quantity: 250
            Quantity range: 200 - 500 Gram
            Type: Cow/buffalo ghee, soft and pure, not whipped
            Packaging: Pre-packed; tin or plastic bottle (price only 1 type of packaging)
            Source: Cow/buffalo
            Specify: Packaging, brand, and observed quantity'),
            array('pcode' => '1101151040','pname' => 'Margarine, regular fat, WKB [250 Gram]','pspecs' => 'Margarine, regular fat, WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 200 - 500 Gram
            Type: Margarine for spreading and cooking
            Packaging: Pre-packed
            Source: 100% vegetable oil and fat
            Fat content: 60-80%
            Exclude: Low fat and liquid products, omega-3 fatty-acid and/or olive oil based products
            Specify: Brand and observed quantity'),
            array('pcode' => '1101151050','pname' => 'Peanut Butter, WKB [340 Gram]','pspecs' => 'Peanut Butter, WKB
            Brand: Well Known
            Preferred quantity: 340
            Quantity range: 300 - 400 Gram
            Type: "Smooth" peanut butter spread; 100% peanut butter, creamy or soft, not chunky
            Packaging: Pre-packed
            Source: Peanuts
            Exclude: Organic
            Specify: Brand and observed quantity'),
            array('pcode' => '1101153010','pname' => 'Coconut oil, BL [0.5 Liter]','pspecs' => 'Coconut oil, BL
            Brand: Brandless
            Preferred quantity: 0.5
            Quantity range: 0.4 - 0.6 Liter
            Type: Regular, not refined
            Packaging: Loose or common packaging
            Exclude: Virgin coconut oil
            Specify: Brand, if any and observed quantity'),
            array('pcode' => '1101153020','pname' => 'Corn oil, WKB [1 Liter]','pspecs' => 'Corn oil, WKB
            Brand: Well Known
            Preferred quantity: 1.0
            Quantity range: 0.75 - 1.20 Liter
            Type: 100% pure, refined corn oil
            Packaging: Pre-packed; plastic bottle or tin
            Production: Industrial
            Specify: Brand and observed quantity'),
            array('pcode' => '1101153030','pname' => 'Olive oil, extra virgin, WKB [1 Liter]','pspecs' => 'Olive oil, extra virgin, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.5 - 1.2 Liter
            Type: Extra virgin olive oil (acidity level lower than 1%) and 1st cold pressing
            Packaging: Pre-packed; glass bottle or tin
            Production: Industrial
            Specify: Brand and observed quantity'),
            array('pcode' => '1101153040','pname' => 'Olive oil, standard, WKB [1 Liter]','pspecs' => 'Olive oil, standard, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.25 Liter
            Type: Standard, refined, not extra virgin
            Packaging: Pre-packed; glass bottle
            Specify: Brand and observed quantity'),
            array('pcode' => '1101153050','pname' => 'Palm oil, WKB [1 Liter]','pspecs' => 'Palm oil, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.5 - 1.2 Liter
            Type: 100% pure, refined palm oil
            Packaging: Pre-packed; plastic bottle
            Production: Industrial
            Specify: Brand and observed quantity'),
            array('pcode' => '1101153060','pname' => 'Peanut oil, WKB [1 Liter]','pspecs' => 'Peanut oil, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.5 - 1.2 Liter
            Type: Regular peanut oil
            Packaging: Pre-packed; plastic bottle
            Production: Industrial
            Specify: Brand and observed quantity'),
            array('pcode' => '1101153070','pname' => 'Soybean oil, WKB [1 Liter]','pspecs' => 'Soybean oil, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.5 - 1.2 Liter
            Type: 100% pure, refined soybean oil
            Packaging: Pre-packed; aseptic package or plastic bottle
            Production: Industrial
            Specify: Brand and observed quantity'),
            array('pcode' => '1101153080','pname' => 'Sunflower oil, BL [1 Liter]','pspecs' => 'Sunflower oil, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 0.75 - 2 Liter
            Type: 100% pure, refined sunflower oil
            Packaging: Pre-packed; bottle or tin
            Production: Industrial
            Specify: Label, if any and observed quantity'),
            array('pcode' => '1101153090','pname' => 'Vegetable oil (blend), WKB [0.5 Liter]','pspecs' => 'Vegetable oil (blend), WKB
            Brand: Well Known
            Preferred quantity: 0.5
            Quantity range: 0.5 - 1.2 Liter
            Type: Regular cooking oil, refined; variety of blended vegetable oil
            Packaging: Pre-packed; plastic bottle
            Production: Industrial
            Specify: Brand and observed quantity'),
            array('pcode' => '1101161010','pname' => 'Apples, fresh, red delicious [1 Kilogram]','pspecs' => 'Apples, fresh, red delicious
            Preferred quantity: 1 Kilogram
            Type: Fresh red delicious
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161020','pname' => 'Bananas, fresh [1 Kilogram]','pspecs' => 'Bananas, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh traditional yellow bananas
            Packaging: Sold loose
            Size: Length 14-18 cm
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits, short finger banana
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161030','pname' => 'Coconut, young green [1 Piece]','pspecs' => 'Coconut, young green
            Preferred quantity: 1 Piece
            Type: Young coconut, green
            Packaging: Sold loose
            Quality: Good quality, with husk and shell
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161040','pname' => 'Grapes, fresh, violet, with seed [1 Kilogram]','pspecs' => 'Grapes, fresh, violet, with seed
            Preferred quantity: 1 Kilogram
            Type: Fresh dark violet grapes (with seed)
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161050','pname' => 'Grapes, fresh, white, seedless [1 Kilogram]','pspecs' => 'Grapes, fresh, white, seedless
            Preferred quantity: 1 Kilogram
            Type: Fresh white grapes (greenish-white/pale green), seedless
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"; if seedless'),
            array('pcode' => '1101161060','pname' => 'Lemon, fresh [1 Kilogram]','pspecs' => 'Lemon, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh green or yellow lemon, labeled only as "lemon"
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits, lime
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161070','pname' => 'Lime, fresh [0.5 Kilogram]','pspecs' => 'Lime, fresh
            Preferred quantity: 0.5 Kilogram
            Type: Fresh green limes
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161080','pname' => 'Mangoes, fresh [1 Kilogram]','pspecs' => 'Mangoes, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh yellow ripe mangoes
            Packaging: Sold loose
            Size: Medium
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits, small local or national breed
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161090','pname' => 'Melon, honeydew, fresh [1 Kilogram]','pspecs' => 'Melon, honeydew, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh melon, honeydew variety
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits, sliced melon
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161100','pname' => 'Oranges, fresh [1 Kilogram]','pspecs' => 'Oranges, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh oranges, labeled only as "oranges"
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161110','pname' => 'Papayas, fresh [1 Kilogram]','pspecs' => 'Papayas, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh papaya (papaw); yellow, orange or red flesh; yellow or green skin
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161120','pname' => 'Peaches, fresh [1 Kilogram]','pspecs' => 'Peaches, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh peach, any pulp color
            Packaging: Sold loose
            Size: Medium
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161130','pname' => 'Pineapples, fresh [1 Kilogram]','pspecs' => 'Pineapples, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh pineapples
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161140','pname' => 'Tamarind, fresh [0.25 Kilogram]','pspecs' => 'Tamarind, fresh
            Preferred quantity: 0.25 Kilogram
            Type: Fresh, brown tamarind, not processed
            Packaging: Sold loose
            Quality: Good quality
            Exclude: Fair trade fruits, organic fruits
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101161150','pname' => 'Watermelon, fresh [1 Kilogram]','pspecs' => 'Watermelon, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh watermelon
            Packaging: Sold loose
            Size: Medium
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade fruits, organic fruits, sliced watermelon
            Specify: Whether "in-season" or "out-of-season"'),
            array('pcode' => '1101162010','pname' => 'Mixed nuts, WKB [200 Gram]','pspecs' => 'Mixed nuts, WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 100 - 500 Gram
            Type: Mix of nuts
            Packaging: Pre-packed
            Exclude: Organic, fair trade products
            Specify: Brand and observed quantity'),
            array('pcode' => '1101162020','pname' => 'Roasted peanuts, WKB [150 Gram]','pspecs' => 'Roasted peanuts, WKB
            Brand: Well Known
            Preferred quantity: 150
            Quantity range: 100 - 350 Gram
            Type: Shelled roasted peanuts (groundnuts), salted
            Packaging: Pre-packed
            Exclude: Organic, fair trade products
            Specify: Brand and observed quantity'),
            array('pcode' => '1101162030','pname' => 'Tamarind, preserved, BL [1000 Gram]','pspecs' => 'Tamarind, preserved, BL
            Brand: Brandless
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Ripe and preserved tamarind
            Packaging: Loose or common packaging
            Exclude: Organic, fair trade products
            Specify: Brand, if any, and observed quantity'),
            array('pcode' => '1101162040','pname' => 'Tinned mixed fruits, in syrup, WKB [500 Gram]','pspecs' => 'Tinned mixed fruits, in syrup, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 300 - 800 Gram
            Type: Mix fruits chunks
            Packaging: Pre-packed; tin
            Exclude: Organic, fair trade products
            Specify: Brand and observed quantity'),
            array('pcode' => '1101162050','pname' => 'Tinned pineapple, whole slices, WKB [500 Gram]','pspecs' => 'Tinned pineapple, whole slices, WKB
            Brand: Well known
            Preferred quantity: 500
            Quantity range: 300 - 850 Gram
            Type: Pineapple slices in a syrup
            Packaging: Pre-packed; tin
            Exclude: Organic, fair trade products
            Specify: Brand and observed quantity'),
            array('pcode' => '1101162060','pname' => 'Raisins, WKB [200 Gram]','pspecs' => 'Raisins, WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 200 - 800 Gram
            Type: Dried raisins
            Packaging: Pre-packed
            Exclude: Organic, fair trade products
            Specify: Brand and observed quantity
            Notes: New item'),
            array('pcode' => '1101171010','pname' => 'Cabbage, green, fresh [1 Kilogram]','pspecs' => 'Cabbage, green, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh green cabbage
            Packaging: Sold loose
            Size: Diameter approximately 20 cm
            Quality: Good quality; intact (unbroken, unmarked) leaves
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171020','pname' => 'Carrots, fresh [1 Kilogram]','pspecs' => 'Carrots, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh carrots, without leaves
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171030','pname' => 'Cauliflower, fresh [1 Kilogram]','pspecs' => 'Cauliflower, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh cauliflower
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171040','pname' => 'Chilies, long, fresh [0.10 Kilogram]','pspecs' => 'Chilies, long, fresh
            Preferred quantity: 0.10 Kilogram
            Type: Fresh long chilies
            Packaging: Sold loose
            Size: Length 10-13 cm
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171050','pname' => 'Corn (maize), fresh [1 Kilogram]','pspecs' => 'Corn (maize), fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh corn (maize) ears; yellow or white soft kernel on the cob; with leaves (not husked)
            Packaging: Sold loose
            Size: Length 15-20 cm
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171060','pname' => 'Cucumber, fresh [1 Kilogram]','pspecs' => 'Cucumber, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh green cucumber, smooth skin
            Packaging: Sold loose
            Size: Length 20-35 cm
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171070','pname' => 'Eggplants (aubergines), fresh [1 Kilogram]','pspecs' => 'Eggplants (aubergines), fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh eggplants (aubergines)
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Round eggplants, fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171080','pname' => 'Garlic, white, fresh [0.25 Kilogram]','pspecs' => 'Garlic, white, fresh
            Preferred quantity: 0.25 Kilogram
            Type: White garlic (allium sativum), bulbs not cloves
            Packaging: Sold loose
            Quality: Good quality
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171090','pname' => 'Ginger, mature, fresh [0.25 Kilogram]','pspecs' => 'Ginger, mature, fresh
            Preferred quantity: 0.25 Kilogram
            Type: Ginger (zingiber officinale), mature
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171100','pname' => 'Green pepper, fresh [1 Kilogram]','pspecs' => 'Green pepper, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh green sweet bell pepper
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171110','pname' => 'Lettuce, iceberg , fresh [1 Kilogram]','pspecs' => 'Lettuce, iceberg , fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh iceberg lettuce, American type
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) leaves
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171120','pname' => 'Onions, fresh [1 Kilogram]','pspecs' => 'Onions, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh brown, light violet or yellow bulb onion
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Shallots, fair trade vegetables, organic vegetables,'),
            array('pcode' => '1101171130','pname' => 'Pumpkin, fresh [0.5 Kilogram]','pspecs' => 'Pumpkin, fresh
            Preferred quantity: 0.5 Kilogram
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171140','pname' => 'Radish, white, fresh [0.5 Kilogram]','pspecs' => 'Radish, white, fresh
            Preferred quantity: 0.5 Kilogram
            Type: Fresh white radish
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171150','pname' => 'Spinach, fresh [1 Kilogram]','pspecs' => 'Spinach, fresh
            Preferred quantity: 1 Kilogram
            Type: Fresh spinach with oval shaped leaves
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) leaves
            Exclude: Baby spinach, fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171160','pname' => 'Chinese spinach, fresh [0.25 Kilogram]','pspecs' => 'Chinese spinach, fresh
            Preferred quantity: 0.25 Kilogram
            Type: Fresh, good, spinach chinese with round leaves and short stem
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) leaves
            Exclude: Baby spinach, fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171170','pname' => 'Water spinach, fresh [0.25 Kilogram]','pspecs' => 'Water spinach, fresh
            Preferred quantity: 0.25 Kilogram
            Type: Fresh, good, water spinach with slim, pointed leaves and sturdy stems
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) leaves
            Exclude: Baby spinach, fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171180','pname' => 'Tomatoes, round, fresh [1 Kilogram]','pspecs' => 'Tomatoes, round, fresh
            Preferred quantity: 1 Kilogram
            Type: Round red tomatoes
            Packaging: Sold loose
            Size: Diameter 4-5 cm
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Beef tomatoes, cherry tomatoes, tomato clusters, fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171190','pname' => 'Fresh broccoli [1 Kilogram]','pspecs' => 'Fresh broccoli
            Preferred quantity: 1 Kilogram
            Type: Fresh broccoli
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171200','pname' => 'Fresh cassava leaves [1 Kilogram]','pspecs' => 'Fresh cassava leaves
            Preferred quantity: 1 Kilogram
            Type: Fresh cassava leaves
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) leaves
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101171210','pname' => 'Fresh sweet potato leaves [1 Kilogram]','pspecs' => 'Fresh sweet potato leaves
            Preferred quantity: 1 Kilogram
            Type: Fresh sweet potato leaves
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) leaves
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101172010','pname' => 'Fresh cassava / manioc / yuca [1 Kilogram]','pspecs' => 'Fresh cassava / manioc / yuca
            Preferred quantity: 1 Kilogram
            Type: Fresh whole cassava / manioc / yuca
            Packaging: Sold loose
            Quality: Good quality; Intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101172020','pname' => 'Fresh potatoes, brown [1 Kilogram]','pspecs' => 'Fresh potatoes, brown
            Preferred quantity: 1 Kilogram
            Type: Fresh brown potatoes; brown or russet skin color, country typical variety
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101172030','pname' => 'Fresh potatoes, white [1 Kilogram]','pspecs' => 'Fresh potatoes, white
            Preferred quantity: 1 Kilogram
            Type: Fresh white potatoes, country typical variety
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101172040','pname' => 'Fresh sweet potatoes [1 Kilogram]','pspecs' => 'Fresh sweet potatoes
            Preferred quantity: 1 Kilogram
            Type: Fresh sweet potatoes; color varies yellow/orange/purple or light brown
            Packaging: Sold loose
            Quality: Good quality; intact (unbroken, unmarked) skin
            Exclude: Yam, fair trade vegetables, organic vegetables'),
            array('pcode' => '1101172050','pname' => 'Fresh taro [1 Kilogram]','pspecs' => 'Fresh taro
            Preferred quantity: 1 Kilogram
            Type: Fresh whole taro
            Packaging: Sold loose
            Quality: Good quality; Intact (unbroken, unmarked) skin
            Exclude: Fair trade vegetables, organic vegetables'),
            array('pcode' => '1101173010','pname' => 'Button mushrooms, tinned, WKB [400 Gram]','pspecs' => 'Button mushrooms, tinned, WKB
            Brand: Well Known
            Preferred quantity: 400
            Quantity range: 300 - 500 Gram
            Type: Whole (not sliced), medium-sized button mushrooms
            Packaging: Pre-packed; tin
            Specify: Brand, net weight observed'),
            array('pcode' => '1101173020','pname' => 'Chilies, dried, BL [100 Gram]','pspecs' => 'Chilies, dried, BL
            Brand: Brandless
            Preferred quantity: 100
            Quantity range: 100 Gram
            Type: Dried, long, flat, not curly, 2.5-3.5 inches long
            Packaging: Loose or common packaging
            Specify: Brand, if any'),
            array('pcode' => '1101173030','pname' => 'Dhal, Khesari, BL [250 Gram]','pspecs' => 'Dhal, Khesari, BL
            Brand: Brandless
            Preferred quantity: 250
            Quantity range: 250 Gram
            Type: Medium quality
            Packaging: Loose or common packaging - plastic or paper
            Specify: Brand, if any'),
            array('pcode' => '1101173040','pname' => 'Dhal, Musur, BL [250 Gram]','pspecs' => 'Dhal, Musur, BL
            Brand: Brandless
            Preferred quantity: 250
            Quantity range: 250 Gram
            Type: Medium quality
            Packaging: Loose or common packaging - plastic or paper
            Specify: Brand, if any'),
            array('pcode' => '1101173050','pname' => 'Dhal, Split Peas, BL [250 Gram]','pspecs' => 'Dhal, Split Peas, BL
            Brand: Brandless
            Preferred quantity: 250
            Quantity range: 250 Gram
            Type: Medium quality
            Packaging: Loose or common packaging - plastic or paper
            Specify: Brand, if any'),
            array('pcode' => '1101173060','pname' => 'Green peas, tinned, WKB [400 Gram]','pspecs' => 'Green peas, tinned, WKB
            Brand: Well Known
            Preferred quantity: 400
            Quantity range: 300 - 500 Gram
            Type: Very fine green peas
            Packaging: Pre-packed; tin
            Specify: Brand'),
            array('pcode' => '1101173070','pname' => 'Green/mung beans, dried, BL [1000 Gram]','pspecs' => 'Green/mung beans, dried, BL
            Brand: Brandless
            Preferred quantity: 1000
            Quantity range: 500 - 1000 Gram
            Type: Dried green beans
            Packaging: Loose or common packaging
            Specify: Label, if any and observed quantity'),
            array('pcode' => '1101173080','pname' => 'Lentils (Arhar/Tur), dried, WKB [800 Gram]','pspecs' => 'Lentils (Arhar/Tur), dried, WKB
            Brand: Well Known
            Preferred quantity: 800
            Quantity range: 600 - 1000 Gram
            Type: Dried lentils
            Packaging: Pre-packed; carton or plastic bag
            Specify: Color, brand'),
            array('pcode' => '1101173090','pname' => 'Moong dhal, loose, BL [1000 Gram]','pspecs' => 'Moong dhal, loose, BL
            Brand: Brandless
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Moong dahl
            Packaging: Loose or common packaging
            Specify: Label, if any and observed quantity'),
            array('pcode' => '1101173100','pname' => 'Mushrooms, dried, BL [100 Gram]','pspecs' => 'Mushrooms, dried, BL
            Brand: Brandless
            Preferred quantity: 100
            Quantity range: 100 Gram
            Type: Dried, 10-12 pieces per 100g
            Packaging: Loose or common packaging
            Specify: Brand, if any'),
            array('pcode' => '1101173110','pname' => 'Peanuts in shell, BL [500 Gram]','pspecs' => 'Peanuts in shell, BL
            Brand: Brandless
            Preferred quantity: 500
            Quantity range: 500 Gram
            Type: Raw peanuts
            Packaging: Loose or common packaging
            Specify: Label, if any and observed quantity'),
            array('pcode' => '1101173120','pname' => 'Potato chips, WKB [100 Gram]','pspecs' => 'Potato chips, WKB
            Brand: Well Known
            Preferred quantity: 100
            Quantity range: 95 - 300 Gram
            Type: Plain salted (unflavored) potato chips, regular cut (round)
            Packaging: Pre-packed
            Exclude: Multipack, flavored, fried in olive oil
            Specify: Brand'),
            array('pcode' => '1101173130','pname' => 'Salted crisps, PRINGLES [200 Gram]','pspecs' => 'Salted crisps, PRINGLES
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 150 - 200 Gram
            Type: Original or any flavor
            Packaging: Pack
            Exclude: Multipack offers, limited editions'),
            array('pcode' => '1101173140','pname' => 'Tofu, WKB [250 Gram]','pspecs' => 'Tofu, WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 100 - 400 Gram
            Type: Square-shaped, firm, without egg
            Packaging: Pre-packaged, plastic container
            Exclude: Tofu made with egg, been curd
            Specify: Brand'),
            array('pcode' => '1101173150','pname' => 'Tomato paste, WKB [100 Gram]','pspecs' => 'Tomato paste, WKB
            Brand: Well Known
            Preferred quantity: 100
            Quantity range: 100 - 250 Gram
            Type: Tomato paste, any concentration
            Packaging: Pre-packed; tin or tube
            Exclude: Tomato puree
            Specify: Brand'),
            array('pcode' => '1101173160','pname' => 'White beans in tomato sauce, tinned, HEINZ [500 Gram]','pspecs' => 'White beans in tomato sauce, tinned, HEINZ
            Brand: Heinz
            Preferred quantity: 500
            Quantity range: 250 - 500 Gram
            Type: Baked white beans in tomato sauce
            Packaging: Pre-packed; tin'),
            array('pcode' => '1101173170','pname' => 'White beans, dried, BL [500 Gram]','pspecs' => 'White beans, dried, BL
            Brand: Brandless
            Preferred quantity: 500
            Quantity range: 400 - 600 Gram
            Type: Dried white beans
            Packaging: Pre-packed; carton or plastic bag
            Specify: Label, if any'),
            array('pcode' => '1101173180','pname' => 'Green peas, frozen, WKB [200 Gram]','pspecs' => 'Green peas, frozen, WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 300 - 600 Gram
            Type: Small/fine green peas
            Packaging: Pre-packed; bag or carton
            Specify: Brand and net weight observed
            Notes: New item'),
            array('pcode' => '1101181010','pname' => 'Brown sugar, WKB [1000 Gram]','pspecs' => 'Brown sugar, WKB
            Brand: Well Known
            Preferred quantity: 1000
            Quantity range: 750 - 1250 Gram
            Type: Fine, granulated
            Packaging: Pre-packed; bag
            Treatment: Refined
            Exclude: Sugar cubes, natural brown sugar (raw sugar)
            Specify: Brand and observed quantity'),
            array('pcode' => '1101181020','pname' => 'White sugar, loose, BNR [1000 Gram]','pspecs' => 'White sugar, loose, BNR
            Brand: Not relevant
            Preferred quantity: 1000
            Quantity range: 1000 Gram
            Type: Fine, granulated
            Packaging: Loose or common packaging
            Treatment: Refined
            Exclude: Sugar cubes
            Specify: Brand'),
            array('pcode' => '1101181030','pname' => 'White sugar, WKB [1000 Gram]','pspecs' => 'White sugar, WKB
            Brand: Well Known
            Preferred quantity: 1000
            Quantity range: 750 - 1250 Gram
            Type: Fine, granulated
            Packaging: Pre-packed; bag
            Treatment: Refined
            Exclude: Sugar cubes
            Specify: Brand and observed quantity'),
            array('pcode' => '1101181040','pname' => 'Sweetener, tablets, WKB [500 Gram]','pspecs' => 'Sweetener, tablets, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 250 - 750 Gram
            Type: Tablets of an artificial sugar substitute as
            Packaging: Pre-packed
            Exclude: Stevia based products; refill packs
            Specify: Brand and observed quantity
            Notes: New item'),
            array('pcode' => '1101182010','pname' => 'Honey, mixed blossoms, WKB [500 Gram]','pspecs' => 'Honey, mixed blossoms, WKB
            Brand: Well-known
            Preferred quantity: 500
            Quantity range: 250 - 500 Gram
            Type: Mixed blossoms ("floral blend" or "multiflora"), clear type
            Packaging: Pre-packed; glass jar or plastic jar or squeezy plastic bottle
            Exclude: Mono-floral varietals; organic honey, sugar free honey, fair trade honey
            Specify: Label, if any'),
            array('pcode' => '1101182020','pname' => 'Jam, apricot or strawberry, WKB [300 Gram]','pspecs' => 'Jam, apricot or strawberry, WKB
            Brand: Well Known
            Preferred quantity: 300
            Quantity range: 200 - 500 Gram
            Type: Apricot or strawberry jam, with pectin
            Packaging: Pre-packed; glass jar
            Fruit content: 45-60 %
            Exclude: Organic products, sugar free products
            Specify: Brand, fruit content, observed quantity'),
            array('pcode' => '1101182030','pname' => 'Jam, high fruit content, WKB [300 Gram]','pspecs' => 'Jam, high fruit content, WKB
            Brand: Well known
            Preferred quantity: 300
            Quantity range: 300 - 500 Gram
            Type: Any except apricot, strawberry, pineapple or orange jams
            Packaging: Pre-packed; glass jar
            Fruit content: more than 60 %
            Exclude: Organic products, sugar free products
            Specify: Brand, fruit content, observed quantity'),
            array('pcode' => '1101182040','pname' => 'Jam, low fruit content, WKB [300 Gram]','pspecs' => 'Jam, low fruit content, WKB
            Brand: Well known
            Preferred quantity: 300
            Quantity range: 300 - 500 Gram
            Type: Any except apricot, strawberry, pineapple or orange jams
            Packaging: Pre-packed; glass jar
            Fruit content: less than 40 %
            Exclude: Organic products, sugar free products
            Specify: Brand, fruit content, observed quantity'),
            array('pcode' => '1101182050','pname' => 'Jam, pineapple, WKB [300 Gram]','pspecs' => 'Jam, pineapple, WKB
            Brand: Well Known
            Preferred quantity: 300
            Quantity range: 250 - 500 Gram
            Type: Pineapple jam, with pectin
            Packaging: Pre-packed; glass jar
            Fruit content: 45-60 %
            Exclude: Organic products, sugar free products
            Specify: Brand, fruit content, observed quantity'),
            array('pcode' => '1101182060','pname' => 'Orange marmalade, WKB [300 Gram]','pspecs' => 'Orange marmalade, WKB
            Brand: Well Known
            Preferred quantity: 300
            Quantity range: 250 - 500 Gram
            Type: Orange marmalade, with pectin
            Packaging: Pre-packed; glass jar
            Exclude: Organic products, sugar free products
            Specify: Brand and observed quantity'),
            array('pcode' => '1101183010','pname' => 'Caramel sweets (toffees), WKB [200 Gram]','pspecs' => 'Caramel sweets (toffees), WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 100 - 250 Gram
            Type: Caramel sweets (toffees), individually wrapped
            Packaging: Pre-packed
            Specify: Brand and observed quantity'),
            array('pcode' => '1101183020','pname' => 'Chewing gum, pellets, WKB [10 Pellets]','pspecs' => 'Chewing gum, pellets, WKB
            Brand: Well Known
            Preferred quantity: 10
            Quantity range: 10 - 20 Pellets
            Type: Chewing gum pellets
            Packaging: Pre-packed
            Content: Sugar free, xylitol allowed
            Specify: Brand; number of pellets observed in a package'),
            array('pcode' => '1101183030','pname' => 'Chewing gum, sticks, Wrigley\'s [1 Pack]','pspecs' => 'Chewing gum, sticks, Wrigley\'s
            Brand: Wrigley\'s Doublemint Gum
            Preferred quantity: 1
            Quantity range: 1 Pack
            Type: 5-7 sticks in a pack, sugar-free, with or without xylitol
            Packaging: Pre-packed; paper or plastic packet
            Specify: Observed quantity'),
            array('pcode' => '1101183040','pname' => 'Chocolate bar, KitKat [35 Gram]','pspecs' => 'Chocolate bar, KitKat
            Brand: Nestle
            Preferred quantity: 35
            Quantity range: 30 - 40 Gram
            Type: Milk chocolate coated wafer, 4 fingers
            Packaging: Pre-packed; plastic/foil
            Specify: Observed quantity'),
            array('pcode' => '1101183050','pname' => 'Fruit drops (hard candies), WKB [200 Gram]','pspecs' => 'Fruit drops (hard candies), WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 100 - 250 Gram
            Type: Individually wrapped fruit drops
            Packaging: Pre-packed
            Specify: Brand and observed quantity'),
            array('pcode' => '1101183060','pname' => 'Ice cream, 500-1000 ml, WKB-M [1000 Milliliter]','pspecs' => 'Ice cream, 500-1000 ml, WKB-M
            Brand: Well Known
            Preferred quantity: 1000
            Quantity range: 500 - 1200 Milliliter
            Type: Plain (basic) vanilla ice cream
            Packaging: Pre-packed
            Exclude: Nestle brand, Gourmet varieties; vegetable fat only ice cream
            Specify: Brand and observed quantity'),
            array('pcode' => '1101183070','pname' => 'Ice cream, 500-1000 ml, Nestle [1000 Milliliter]','pspecs' => 'Ice cream, 500-1000 ml, Nestle
            Brand: Nestle
            Preferred quantity: 1000
            Quantity range: 500 - 1000 Milliliter
            Type: Plain (basic) vanilla ice cream
            Packaging: Pre-packed
            Exclude: Gourmet varieties; vegetable fat only ice cream
            Specify: Observed quantity'),
            array('pcode' => '1101183080','pname' => 'Ice cream, cornetto type, single piece, WKB [120 Milliliter]','pspecs' => 'Ice cream, cornetto type, single piece, WKB
            Brand: Well Known
            Preferred quantity: 120
            Quantity range: 80 - 140 Milliliter
            Type: Vanilla and chocolate ice cream cone
            Packaging: Pre-packed
            Exclude: Multipack
            Specify: Brand and observed quantity'),
            array('pcode' => '1101183090','pname' => 'Milk chocolate bar, Nestle [100 Gram]','pspecs' => 'Milk chocolate bar, Nestle
            Brand: Nestle
            Preferred quantity: 100
            Quantity range: 75 - 120 Gram
            Type: Plain, single solid milk chocolate bar
            Packaging: Pre-packed; plastic/foil
            Content: Cocoa content approximately 30%
            Exclude: Chocolate with soft center, added dried fruits and cereals; cooking chocolate
            Specify: Observed quantity'),
            array('pcode' => '1101183100','pname' => 'Chocolate bar, Toblerone classic [100 Gram]','pspecs' => 'Chocolate bar, Toblerone classic
            Brand: Toblerone
            Preferred quantity: 100
            Quantity range: 75 - 125 Gram
            Type: Toblerone classic, prepacked bar
            Packaging: Pre-packed'),
            array('pcode' => '1101191010','pname' => 'Baby food, cereals, WKB [125 Gram]','pspecs' => 'Baby food, cereals, WKB
            Brand: Well Known
            Preferred quantity: 125
            Quantity range: 100 - 200 Gram
            Type: Instant baby cereals, dry mix
            Packaging: Pre-packed; box
            Exclude: Whole grains cereals
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191020','pname' => 'Baby food, puree, WKB [200 Gram]','pspecs' => 'Baby food, puree, WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 130 - 300 Gram
            Type: Fruit or vegetable based puree for babies
            Packaging: Pre-packed; glass or plastic bottle
            Exclude: Cereals, meat, pasta
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191030','pname' => 'Baking powder, WKB [350 Gram]','pspecs' => 'Baking powder, WKB
            Brand: Well Known
            Preferred quantity: 350
            Quantity range: 200 - 500 Gram
            Type: Baking powder
            Packaging: Pre-packed
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191040','pname' => 'Black Pepper, powder, WKB [75 Gram]','pspecs' => 'Black Pepper, powder, WKB
            Brand: Well known
            Preferred quantity: 75
            Quantity range: 40 - 100 Gram
            Type: Powdered black pepper
            Packaging: Pre-packed; plastic or paper
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191050','pname' => 'Black pepper, ground, WKB [50 Gram]','pspecs' => 'Black pepper, ground, WKB
            Brand: Well Known
            Preferred quantity: 50
            Quantity range: 30 - 100 Gram
            Type: Ground black pepper
            Packaging: Pre-packed; glass or metal dispenser
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191060','pname' => 'Chili powder, WKB [175 Gram]','pspecs' => 'Chili powder, WKB
            Brand: Well Known
            Preferred quantity: 175
            Quantity range: 100 - 200 Gram
            Type: Pure chili powder
            Packaging: Pre-packed; plastic bag
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191070','pname' => 'Chili sauce, WKB [200 Milliliter]','pspecs' => 'Chili sauce, WKB
            Brand: Well Known
            Preferred quantity: 200
            Quantity range: 190 - 300 Milliliter
            Type: Liquid form chili sauce
            Packaging: Pre-packed; glass bottle
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191080','pname' => 'Cooking salt, WKB [1 Kilogram]','pspecs' => 'Cooking salt, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.40 - 1.20 Kilogram
            Type: Mineral cooking salt, iodized
            Packaging: Pre-packed; simple box or bag
            Exclude: Sea salt, special salts
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191090','pname' => 'Curry powder, WKB [175 Gram]','pspecs' => 'Curry powder, WKB
            Brand: Well Known
            Preferred quantity: 175
            Quantity range: 100 - 200 Gram
            Type: Curry powder, mixed ingredients
            Packaging: Pre-packed; glass or plastic container
            Content: May contain turmeric, coriander, fenugreek, cinnamon, cumin, black pepper, ginger, cardamom, cornstarch, salt and silicon dioxide
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191100','pname' => 'Dark soy sauce, WKB [210 Milliliter]','pspecs' => 'Dark soy sauce, WKB
            Brand: Well known
            Preferred quantity: 210
            Quantity range: 200 - 500 Milliliter
            Type: Dark, in liquid form, adds color aside from flavor to the dish
            Packaging: Pre-packed; glass or plastic bottle
            Specify: Brand (usually a local brand) and observed quantity;
            Note: If observed UoM is in gram, please convert, refer to http: //www.fao.org/docrep/017/ap815e/ap815e.pdf'),
            array('pcode' => '1101191110','pname' => 'Fish sauce, WKB [250 Milliliter]','pspecs' => 'Fish sauce, WKB
            Brand: Well known
            Preferred quantity: 250
            Quantity range: 200 - 300 Milliliter
            Type: Dark, in liquid form
            Packaging: Pre-packed; glass or plastic bottle
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191120','pname' => 'Mayonnaise, WKB [250 Gram]','pspecs' => 'Mayonnaise, WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 200 - 800 Gram
            Type: Mayonnaise, fat content 65-80%
            Packaging: Pre-packed; glass or plastic jar
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191130','pname' => 'Meat extract, WKB [100 Gram]','pspecs' => 'Meat extract, WKB
            Brand: Well Known
            Preferred quantity: 100
            Quantity range: 50 - 150 Gram
            Type: Meat based cubes, chicken or beef
            Packaging: Pre-packed, carton box
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191140','pname' => 'MSG, Monosodium Glutamate, WKB [175 Gram]','pspecs' => 'MSG, Monosodium Glutamate, WKB
            Brand: Well known
            Preferred quantity: 175
            Quantity range: 100 - 200 Gram
            Type: Powdered MSG
            Packaging: Pre-packed; plastic or glass bottle
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191150','pname' => 'Shrimp Paste/Sauce, WKB [250 Gram]','pspecs' => 'Shrimp Paste/Sauce, WKB
            Brand: Well known
            Preferred quantity: 250
            Quantity range: 200 - 300 Gram
            Type: Ground and fermented small shrimps
            Packaging: Pre-packed; glass bottle
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191160','pname' => 'Soya sauce, WKB [250 Milliliter]','pspecs' => 'Soya sauce, WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 150 - 400 Milliliter
            Type: Soya sauce, liquid, salty but may have slightly sweet taste
            Packaging: Pre-packed; glass or plastic bottle
            Content: Soybeans, water, salt, grains and dried vegetables
            Specify: Brand, country of origin (usually an international brand), observed quantity'),
            array('pcode' => '1101191170','pname' => 'Tomato ketchup, WKB [500 Gram]','pspecs' => 'Tomato ketchup, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 400 - 800 Gram
            Type: Tomato ketchup
            Packaging: Pre-packed; glass or plastic bottle
            Exclude: Hot or mexican tomato ketchup
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191180','pname' => 'Turmeric powder, WKB [175 Gram]','pspecs' => 'Turmeric powder, WKB
            Brand: Well known
            Preferred quantity: 175
            Quantity range: 100 - 200 Gram
            Type: Powdered
            Packaging: Pre-packed; plastic, foil or paper
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191190','pname' => 'Vinegar, dark malt, WKB [375 Milliliter]','pspecs' => 'Vinegar, dark malt, WKB
            Brand: Well known
            Preferred quantity: 375
            Quantity range: 300 - 500 Milliliter
            Packaging: Pre-packed; glass bottle
            Specify: Brand and observed quantity'),
            array('pcode' => '1101191200','pname' => 'Ready-made meal, chicken and rice, chilled, WKB [500 Gram]','pspecs' => 'Ready-made meal, chicken and rice, chilled, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 300 - 600 Gram
            Type: Rice, chicken, spicy sauce; not frozen; suitable for micro-wave
            Packaging: Pre-packed
            Exclude: Frozen, low calories products; tinned products
            Specify: Brand, country of origin, observed quantity
            Notes: New item'),
            array('pcode' => '1101191210','pname' => 'Ready-made meal, lasagne bolognese, frozen, WKB [500 Gram]','pspecs' => 'Ready-made meal, lasagne bolognese, frozen, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 300 - 600 Gram
            Type: Lasagne bolognese; not chilled; suitable for oven or micro-wave
            Packaging: Pre-packed
            Exclude: Chilled, low calories products; tinned products
            Specify: Brand, country of origin, observed quantity
            Notes: New item'),
            array('pcode' => '1101211010','pname' => 'Coffee, decaffeinated, NESCAFE Classic [100 Gram]','pspecs' => 'Coffee, decaffeinated, NESCAFE Classic
            Brand: NESCAFE Classic
            Preferred quantity: 100
            Quantity range: 80 - 120 Gram
            Type: Granular instant coffee, decaffeinated
            Packaging: Pre-packed; bottle jar
            Specify: Observed quantity'),
            array('pcode' => '1101211020','pname' => 'Coffee, decaffeinated, WKB other than NESCAFE [100 Gram]','pspecs' => 'Coffee, decaffeinated, WKB other than NESCAFE
            Brand: Well known, except NESCAFE
            Preferred quantity: 100
            Quantity range: 80 - 120 Gram
            Type: Granular instant coffee, decaffeinated
            Packaging: Pre-packed; bottle jar
            Specify: Brand and observed quantity'),
            array('pcode' => '1101211030','pname' => 'Coffee, instant, NESCAFE Classic [200 Gram]','pspecs' => 'Coffee, instant, NESCAFE Classic
            Brand: Nescafe Classic
            Preferred quantity: 200
            Quantity range: 100 - 300 Gram
            Type: Granular instant coffee, regular, freeze dried
            Packaging: Pre-packed
            Exclude: Decaffeinated coffee
            Specify: Observed quantity'),
            array('pcode' => '1101211040','pname' => 'Coffee, instant, WKB other than NESCAFE [200 Gram]','pspecs' => 'Coffee, instant, WKB other than NESCAFE
            Brand: Well known, except NESCAFE
            Preferred quantity: 200
            Quantity range: 160 - 240 Gram
            Type: Powder instant coffee, regular
            Packaging: Pre-packed; bottle jar
            Exclude: Decaffeinated coffee
            Specify: Brand and observed quantity'),
            array('pcode' => '1101211050','pname' => 'Horlicks, plastic jar, big [800 Gram]','pspecs' => 'Horlicks, plastic jar, big
            Brand: Horlicks
            Preferred quantity: 800
            Quantity range: 750 - 850 Gram
            Type: instant chocolate drink
            Packaging: Pre-packed; plastic jar
            Specify: Observed quantity'),
            array('pcode' => '1101211060','pname' => 'Horlicks, plastic jar, small [400 Gram]','pspecs' => 'Horlicks, plastic jar, small
            Brand: Horlicks
            Preferred quantity: 400
            Quantity range: 300 - 500 Gram
            Type: instant chocolate drink
            Packaging: Pre-packed; plastic jar
            Specify: Observed quantity'),
            array('pcode' => '1101211070','pname' => 'Horlicks, packet [300 Gram]','pspecs' => 'Horlicks, packet
            Brand: Horlicks
            Preferred quantity: 300
            Quantity range: 200 - 320 Gram
            Type: instant chocolate drink
            Packaging: Pre-packed; plastic packet
            Specify: Observed quantity'),
            array('pcode' => '1101211080','pname' => 'Milo, tin, big [1000 Gram]','pspecs' => 'Milo, tin, big
            Brand: Milo
            Preferred quantity: 1000
            Quantity range: 900 - 1500 Gram
            Type: instant chocolate drink
            Packaging: Pre-packed; tin
            Specify: Observed quantity'),
            array('pcode' => '1101211090','pname' => 'Milo, tin, small [400 Gram]','pspecs' => 'Milo, tin, small
            Brand: Milo
            Preferred quantity: 400
            Quantity range: 300 - 500 Gram
            Type: instant chocolate drink
            Packaging: Pre-packed; tin
            Specify: Observed quantity'),
            array('pcode' => '1101211100','pname' => 'Milo/Ovaltine, packet [300 Gram]','pspecs' => 'Milo/Ovaltine, packet
            Brand: Milo or Ovaltine
            Preferred quantity: 300
            Quantity range: 200 - 400 Gram
            Type: instant chocolate drink
            Packaging: Pre-packed; plastic packet
            Specify: Observed quantity'),
            array('pcode' => '1101211110','pname' => 'Ovaltine, glass jar, big [1000 Gram]','pspecs' => 'Ovaltine, glass jar, big
            Brand: Ovaltine
            Preferred quantity: 1000
            Quantity range: 900 - 1100 Gram
            Type: instant chocolate drink
            Packaging: Pre-packed; glass jar
            Specify: Observed quantity'),
            array('pcode' => '1101211120','pname' => 'Tea, black, 100 bags, Lipton [1 Pack]','pspecs' => 'Tea, black, 100 bags, Lipton
            Brand: Lipton
            Preferred quantity: 1
            Quantity range: 1 Pack
            Type: Black tea in bags, 100 bags in a pack, approximately 2 grams per bag, unsweetened, unflavored
            Packaging: Pre-packed; carton box
            Exclude: Tea infused with other ingredients (such as brown rice, fruit, herb, etc.)'),
            array('pcode' => '1101211130','pname' => 'Tea, black, 100 bags, WKB other than Lipton [1 Pack]','pspecs' => 'Tea, black, 100 bags, WKB other than Lipton
            Brand: Well known except Lipton
            Preferred quantity: 1
            Quantity range: 1 Pack
            Type: Black tea in bags, 100 bags in a pack, approximately 2 grams per bag, unsweetened, unflavored
            Packaging: Pre-packed; carton box
            Exclude: Tea infused with other ingredients (such as brown rice, fruit, herb, etc.)
            Specify: Brand'),
            array('pcode' => '1101211140','pname' => 'Tea, black, in bags, WKB [50 Bag]','pspecs' => 'Tea, black, in bags, WKB
            Brand: Well Known
            Preferred quantity: 50
            Quantity range: 25 - 50 Bag
            Type: Black tea in bags, approximately 2 grams per bag
            Packaging: Pre-packed; carton
            Exclude: Tea infused with other ingredients (such as brown rice, fruit, herb, etc.)
            Specify: Brand and observed quantity'),
            array('pcode' => '1101211150','pname' => 'Tea, dust, WKB [250 Gram]','pspecs' => 'Tea, dust, WKB
            Brand: Well known
            Preferred quantity: 250
            Quantity range: 100 - 300 Gram
            Type: Black, dust, unflavored, unsweetened
            Packaging: Pre-packed
            Specify: Brand and observed quantity'),
            array('pcode' => '1101211160','pname' => 'Tea, green, WKB [250 Gram]','pspecs' => 'Tea, green, WKB
            Brand: Well Known
            Preferred quantity: 250
            Quantity range: 150 - 300 Gram
            Type: Green tea, loose leaves
            Packaging: Pre-packed; jar or carton
            Exclude: Tea infused with other ingredients (such as brown rice, fruit, herb, etc.)
            Specify: Brand and observed quantity'),
            array('pcode' => '1101211170','pname' => 'Tea, loose leaves, WKB [250 Gram]','pspecs' => 'Tea, loose leaves, WKB
            Brand: Well known such as Lipton
            Preferred quantity: 250
            Quantity range: 200 - 300 Gram
            Type: Black, loose leaves, unflavored, unsweetened
            Packaging: Pre-packed; box carton
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221010','pname' => 'Carbonated drink, fruit flavoured, WKB [1 Liter]','pspecs' => 'Carbonated drink, fruit flavoured, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.5 Liter
            Type: Carbonated fruit flavoured drink (e.g. FANTA)
            Packaging: Pre-packed; plastic bottle
            Price: Without deposit
            Exclude: Multipack
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221020','pname' => 'Juice, 100% Apple, ready to drink, WKB [1 Liter]','pspecs' => 'Juice, 100% Apple, ready to drink, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.5 Liter
            Type: 100% apple juice, made from concentrate, ready to drink
            Packaging: Pre-packed; carton or plastic bottle
            Exclude: Beverages requiring preparation, freshly squeezed juice, juice not from concentrate
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221030','pname' => 'Juice, 100% Orange, ready to drink, WKB [1 Liter]','pspecs' => 'Juice, 100% Orange, ready to drink, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.00 Liter
            Type: 100% orange juice, made from concentrate, ready to drink
            Packaging: Pre-packed; carton or plastic bottle
            Exclude: Beverages requiring preparation, freshly squeezed juice, juice not from concentrate
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221040','pname' => 'Juice, not ready to drink, WKB [1 Liter]','pspecs' => 'Juice, not ready to drink, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.5 Liter
            Type: 100% orange or pineapple juice, not ready to drink, need to add water
            Packaging: Pre-packed; carton or plastic bottle
            Exclude: Freshly squeezed juice
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221050','pname' => 'Juice, powdered mix, Tang [500 Gram]','pspecs' => 'Juice, powdered mix, Tang
            Brand: Tang
            Preferred quantity: 500
            Quantity range: 450 - 550 Gram
            Type: Powdered mix, orange flavor
            Packaging: Pre-packed; bag, packet or foil
            Specify: Observed quantity'),
            array('pcode' => '1101221060','pname' => 'Softdrinks, COCA-COLA / PEPSI COLA, can [0.33 Liter]','pspecs' => 'Softdrinks, COCA-COLA / PEPSI COLA, can
            Brand: Coca Cola or Pepsi Cola
            Preferred quantity: 0.33
            Quantity range: 0.2 - 0.5 Liter
            Type: Regular cola
            Packaging: Pre-packed; can
            Price: Without deposit
            Exclude: Multipack
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221070','pname' => 'Softdrinks, COCA-COLA / PEPSI COLA, large bottle [2 Liter]','pspecs' => 'Softdrinks, COCA-COLA / PEPSI COLA, large bottle
            Brand: Coca Cola or Pepsi Cola
            Preferred quantity: 2
            Quantity range: 1.25 - 3 Liter
            Type: Regular cola
            Packaging: Pre-packed; plastic bottle
            Price: Without deposit
            Exclude: Multipack
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221080','pname' => 'Softdrinks, COCA-COLA / PEPSI COLA, small bottle [0.33 Liter]','pspecs' => 'Softdrinks, COCA-COLA / PEPSI COLA, small bottle
            Brand: Coca-Cola or Pepsi Cola
            Preferred quantity: 0.33
            Quantity range: 0.25 - 0.50 Liter
            Type: Regular cola
            Packaging: Pre-packed; glass bottle
            Price: Without deposit; bottle returnable
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221090','pname' => 'Softdrinks, small bottle, WKB [0.22 Liter]','pspecs' => 'Softdrinks, small bottle, WKB
            Brand: Well known, locally produced
            Preferred quantity: 0.22
            Quantity range: 0.22 - 0.33 Liter
            Type: Regular cola,
            Packaging: Pre-packed; glass or plastic bottle
            Price: Without deposit; bottle returnable
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221100','pname' => 'Water, still, large bottle, WKB [1.5 Liter]','pspecs' => 'Water, still, large bottle, WKB
            Brand: Well Known
            Preferred quantity: 1.5
            Quantity range: 1 - 2 Liter
            Type: Still (not carbonated) water
            Packaging: Pre-packed; plastic bottle
            Price: Without deposit
            Exclude: International brands (such as Evian, Vittel), flavored water
            Specify: Brand and observed quantity'),
            array('pcode' => '1101221110','pname' => 'RED BULL, can [0.25 Liter]','pspecs' => 'RED BULL, can
            Brand: RED BULL
            Quantiy: 0.25
            Quantity range: 0.2 - 0.5 Liter
            Type: Energy drink
            Packaging: Can
            Price: Without deposit
            Exclude: Multipack
            Specify: Label, if any and observed quantity
            Notes: New item'),
            array('pcode' => '1102111010','pname' => 'Scotch whisky, JOHNNIE WALKER, Black label [0.75 Liter]','pspecs' => 'Scotch whisky, JOHNNIE WALKER, Black label
            Brand: Johnnie Walker
            Preferred quantity: 0.75
            Quantity range: 0.7 - 1 Liter
            Packaging: Glass bottle
            Model: Black label
            Type: Scotch whiskey
            Alcohol content: Approximately 40 %
            Specify: Observed quantity'),
            array('pcode' => '1102111020','pname' => 'Scotch whisky, JOHNNIE WALKER, Red label [0.75 Liter]','pspecs' => 'Scotch whisky, JOHNNIE WALKER, Red label
            Brand: Johnnie Walker
            Preferred quantity: 0.75
            Quantity range: 0.7 - 1 Liter
            Model: Red label
            Type: Scotch whiskey
            Alcohol content: Approximately 40 %
            Specify: Observed quantity'),
            array('pcode' => '1102111030','pname' => 'Vodka, WKB [1 Liter]','pspecs' => 'Vodka, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 0.5 - 1.2 Liter
            Type: Clear vodka, non-flavored
            Alcohol content: Approximately 40 %
            Specify: Brand and observed quantity'),
            array('pcode' => '1102111040','pname' => 'Whiskey, local origin, BL [0.75 Liter]','pspecs' => 'Whiskey, local origin, BL
            Brand: Brandless
            Preferred quantity: 0.75
            Quantity range: 0.7 - 1.0 Liter
            Packaging: Glass bottle
            Type: Locally produced whiskey
            Alcohol content: 30% - 40 %
            Specify: Brand, if any, and observed quantity'),
            array('pcode' => '1102111050','pname' => 'Whiskey, local origin, WKB [0.75 Liter]','pspecs' => 'Whiskey, local origin, WKB
            Brand: Well known
            Preferred quantity: 0.75
            Quantity range: 0.7 - 1.0 Liter
            Packaging: Glass bottle
            Type: Well known locally produced whiskey
            Alcohol content: 30% - 40 %
            Specify: Brand and observed quantity'),
            array('pcode' => '1102121010','pname' => 'Red wine, Jacob\'s Creek [0.75 Liter]','pspecs' => 'Red wine, Jacob\'s Creek
            Brand: Jacob\'s Creek
            Preferred quantity: 0.75
            Quantity range: 0.7 - 1.0 Liter
            Type: Australian red wine, Cabernet Sauvignon, not fortified
            Years of vintage: 2015-2018
            Alcohol content: 11-13%
            Packaging: Bottle
            Exclude: Table wine
            Specify: Observed quantity'),
            array('pcode' => '1102121020','pname' => 'Red wine, table wine, WKB [0.75 Liter]','pspecs' => 'Red wine, table wine, WKB
            Brand: Well Known
            Preferred quantity: 0.75
            Quantity range: 0.7 - 2 Liter
            Type: Ordinary red wine, not fortified
            Quality: Table wine
            Years of vintage: No indication of vintage
            Alcohol content: 10-14%
            Packaging: Bottle
            Exclude: Quality wines produced in specified regions
            Specify: Label, if any'),
            array('pcode' => '1102121030','pname' => 'Sake or Rice wine, WKB [0.75 Liter]','pspecs' => 'Sake or Rice wine, WKB
            Brand: Well known
            Preferred quantity: 0.75
            Quantity range: 0.7 - 1.0 Liter
            Type: Rice wine, Industrial produced
            Alcohol content: 10-15%
            Packaging: Glass bottle
            Specify: Brand and observed quantity'),
            array('pcode' => '1102121040','pname' => 'White wine, Jacob\'s Creek [0.75 Liter]','pspecs' => 'White wine, Jacob\'s Creek
            Brand: Jacob\'s Creek
            Preferred quantity: 0.75
            Quantity range: 0.7 - 1.0 Liter
            Type: Australian white wine, Chardonnay, not fortified
            Quality: With state certificate of quality and origin
            Years of vintage: 2015-2018
            Alcohol content: 11-13%
            Packaging: Glass bottle
            Exclude: Table wine
            Specify: Observed quantity'),
            array('pcode' => '1102121050','pname' => 'White wine, table wine, WKB [0.75 Liter]','pspecs' => 'White wine, table wine, WKB
            Brand: Well Known
            Preferred quantity: 0.75
            Quantity range: 0.7 - 1 Liter
            Type: Ordinary white wine, not fortified
            Quality: Table wine
            Years of vintage: No indication of vintage
            Alcohol content: 10-14%
            Packaging: Bottle
            Exclude: Quality wines produced in specified regions
            Specify: Label, if any'),
            array('pcode' => '1102131010','pname' => 'Beer, single bottle, CARLSBERG [0.33 Liter]','pspecs' => 'Beer, single bottle, CARLSBERG
            Brand: Carlsberg
            Preferred quantity: 0.33
            Quantity range: 0.30 - 0.35 Liter
            Domestic brand: No
            Type: Lager
            Packaging: Glass bottle
            Alcohol content: 3% - 5%
            Specify: Observed quantity'),
            array('pcode' => '1102131020','pname' => 'Beer, single bottle, domestic brand, WKB [0.5 Liter]','pspecs' => 'Beer, single bottle, domestic brand, WKB
            Brand: Well Known
            Preferred quantity: 0.5
            Quantity range: 0.25 - 0.75 Liter
            Domestic brand: Yes
            Type: Lager
            Packaging: Bottle
            Alcohol content: 4.8 - 5.6%
            Specify: Brand and observed quantity'),
            array('pcode' => '1102131030','pname' => 'Beer, single bottle, HEINEKEN [0.33 Liter]','pspecs' => 'Beer, single bottle, HEINEKEN
            Brand: Heineken
            Preferred quantity: 0.33
            Quantity range: 0.25 - 0.50 Liter
            Domestic brand: No
            Type: Lager
            Packaging: Bottle
            Alcohol content: Approximately 5%
            Specify: Observed quantity'),
            array('pcode' => '1102131040','pname' => 'Beer, single bottle, TIGER [0.33 Liter]','pspecs' => 'Beer, single bottle, TIGER
            Brand: Tiger
            Preferred quantity: 0.33
            Quantity range: 0.30 - 0.35 Liter
            Type: Lager
            Packaging: Glass bottle
            Alcohol content: 3% - 5%
            Specify: Observed quantity'),
            array('pcode' => '1102131050','pname' => 'Beer, single can, domestic brand,WKB [0.5 Liter]','pspecs' => 'Beer, single can, domestic brand,WKB
            Brand: Well Known
            Preferred quantity: 0.5
            Quantity range: 0.33 - 0.50 Liter
            Domestic brand: Yes
            Type: Lager
            Packaging: Can
            Alcohol content: 4.8-5.6%
            Specify: Brand and observed quantity'),
            array('pcode' => '1102211010','pname' => 'Cigarette, domestic brand, flip-top, WKB [1 Pack (of 20 cigarettes)]','pspecs' => 'Cigarette, domestic brand, flip-top, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Pack (of 20 cigarettes)
            Type: Tobacco, with filter
            Domestic brand: Yes
            Packaging: Flip-top
            Size: Regular
            Strength: Regular
            Flavoring: Regular
            Exclude: Long or slim size, flavored, light cigarettes
            Specify: Brand and number of sticks observed'),
            array('pcode' => '1102211020','pname' => 'Cigarette, domestic brand, packet, WKB [1 Pack (of 20 cigarettes)]','pspecs' => 'Cigarette, domestic brand, packet, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Pack (of 20 cigarettes)
            Type: Tobacco, with filter
            Domestic brand: Yes
            Packaging: Packet
            Size: Regular
            Strength: Regular
            Flavoring: Regular
            Exclude: Long or slim size, flavored, light cigarettes
            Price for: 1 packet
            Specify: Brand'),
            array('pcode' => '1102211030','pname' => 'Cigarette, MALBORO Red [1 Pack (of 20 cigarettes)]','pspecs' => 'Cigarette, MALBORO Red
            Brand: Marlboro
            Model: Red
            Preferred quantity: 1
            Quantity range: 1 Pack (of 20 cigarettes)
            Type: Tobacco, with filter
            Domestic brand: No
            Packaging: Packet
            Size: Regular
            Strength: Regular
            Flavoring: Regular
            Exclude: Long or slim size, flavored, light cigarettes
            Price for: 1 packet'),
            array('pcode' => '1102211040','pname' => 'Cigarette, other than MALBORO [1 Pack (close to 20 cigarettes)]','pspecs' => 'Cigarette, other than MALBORO
            Brand: Well known, except MARLBORO
            Preferred quantity: 1
            Quantity range: 1 Pack (close to 20 cigarettes)
            Type: Tobacco, with filter
            Domestic brand: Yes
            Packaging: Flip-top
            Size: Regular
            Strength: Regular
            Flavoring: Regular
            Exclude: Long or slim size, flavored
            Price for: 1 packet
            Specify: Brand and number of sticks observed, country'),
            array('pcode' => '1103111010','pname' => 'Clothing material, polyester, BNR [1 Running Meter]','pspecs' => 'Clothing material, polyester, BNR
            Brand: Not relevant
            Preferred quantity: 1 Running Meter
            Type: For blouse, dress or shirt
            Material: 100 % polyester
            Weight: Light (<100 g per m²)
            Width: 110-150 cm
            Pattern: Printed or simple patterns
            Exclude: Designer products
            Specify: Width'),
            array('pcode' => '1103111020','pname' => 'Clothing material, cotton, BNR [1 Running Meter]','pspecs' => 'Clothing material, cotton, BNR
            Brand: Not relevant
            Preferred quantity: 1 Running Meter
            Type: For blouse or shirt
            Material: 100 % cotton
            Weight: Light (<100g/m²)
            Width: 110-150 cm
            Pattern: Printed or simple patterns
            Exclude: Designer products
            Specify: Width'),
            array('pcode' => '1103111030','pname' => 'Handkerchief, men\'s, WKB-M [1 Piece]','pspecs' => 'Handkerchief, men\'s, WKB-M
            Brand: Well known
            Brand Stratum: Medium
            Preferred quantity: 1 Piece
            Type: Handkerchief
            Material: 100% cotton
            Width: 39-41 cm (around 16 in)
            Length: 41-42 cm (around 16 in)
            Pattern: Printed
            Exclude: Designer products
            Specify: Brand'),
            array('pcode' => '1103111040','pname' => 'Men\'s belt, WKB-M [1 Piece]','pspecs' => 'Men\'s belt, WKB-M
            Brand: Well known
            Brand Stratum: Medium
            Preferred quantity: 1 Piece
            Type: Classic
            Material: Leather with plain metal buckle
            Width: 2.5-4 cm
            Length: Regular medium adult size
            Pattern: Plain, no design
            Exclude: Designer products
            Specify: Brand'),
            array('pcode' => '1103111050','pname' => 'Saree 5.5m, synthetic, BNR [1 Piece]','pspecs' => 'Saree 5.5m, synthetic, BNR
            Brand: Not relevant
            Preferred quantity: 1 Piece
            Type: Saris, industrial production
            Material: 100% synthetic
            Width: 112 cm
            Length: 5.5 meter (size)
            Pattern: Multicolor, fiber or yarn dyed
            Exclude: Designer products'),
            array('pcode' => '1103111060','pname' => 'Shawl, cotton, BNR [1 Piece]','pspecs' => 'Shawl, cotton, BNR
            Brand: Not relevant
            Preferred quantity: 1 Piece
            Material: 100% cotton
            Width: 150 cm
            Length: 70 cm
            Pattern: Without pattern
            Exclude: Designer products'),
            array('pcode' => '1103111070','pname' => 'Shirt fabric, cotton polyester, BNR [1 Running Meter]','pspecs' => 'Shirt fabric, cotton polyester, BNR
            Brand: Not relevant
            Preferred quantity: 1 Running Meter
            Type: For blouse or shirt
            Material: Cotton/Polyester (50% - 80% cotton)
            Width: 112-117 cm
            Pattern: Woven fabric, no design, solid color
            Exclude: Designer products
            Specify: Width'),
            array('pcode' => '1103111080','pname' => 'Suit fabric, wool blend, BNR [1 Running Meter]','pspecs' => 'Suit fabric, wool blend, BNR
            Brand: Not relevant
            Preferred quantity: 1 Running Meter
            Type: Broad cloth for suits
            Material: 50% - 80% wool blend
            Width: 112-117 cm (44-46 inches)
            Pattern: Woven fabric, no design, solid color
            Exclude: Designer products
            Specify: Width'),
            array('pcode' => '1103111090','pname' => 'Tie, synthetic, WKB-L [1 Piece]','pspecs' => 'Tie, synthetic, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Classic
            Material: 100 % synthetic
            Width: 8-9 cm
            Length: 147-148 cm
            Lining: Yes, any material
            Pattern: Simple
            Exclude: Designer products
            Specify: Brand'),
            array('pcode' => '1103111100','pname' => 'Shawl, polyester, BNR [1 Piece]','pspecs' => 'Shawl, polyester, BNR
            Brand: Not relevant
            Preferred quantity: 1 Piece
            Type: plain colours
            Material: polyester, such as chiffon
            Width: 60-75 cm
            Length: close to 190 cm
            Pattern: Without pattern
            Exclude: Designer products; head gear or scarf'),
            array('pcode' => '1103111110','pname' => 'Men\'s belt, synthetic leather [1 Piece]','pspecs' => 'Men\'s belt, synthetic leather
            Brand: Not relevant
            Preferred quantity: 1 Piece
            Material: synthetic leather, with plain metal buckle
            Width: 2.5-4 cm
            Length: Regular medium adult size
            Exclude: Designer products
            Specify: Width'),
            array('pcode' => '1103111120','pname' => 'Women\'s headscarf, WKB [1 Piece]','pspecs' => 'Women\'s headscarf, WKB
            Brand: Well known
            Preferred quantity: 1 Piece
            Material: Chiffon (100% polyester)
            Width: 180 cm
            Length: 70 cm
            Color: No design; solid color
            Pattern: Simple or without pattern
            Size: Regular women\'s size
            Exclude: Designer products
            Specify: Brand'),
            array('pcode' => '1103121010','pname' => 'Babies\' bodysuit, WKB-L [1 Piece]','pspecs' => 'Babies\' bodysuit, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Babies\' bodysuit
            Material: 100 % cotton
            Package: 1-3 pieces
            Style: Reinforced shoulders; open feet; no cuffs, lining or hood
            Sleeve length: Long arm sleeves, with or without legs
            Lining: No
            Color: Single color or simple pattern allowed
            Pattern: Plain, simple printed design allowed
            Size: For 12-18 months, boy or girl
            Specify: Brand, number of pieces in package'),
            array('pcode' => '1103121020','pname' => 'Boy\'s T-Shirt, WKB-M [1 Piece]','pspecs' => 'Boy\'s T-Shirt, WKB-M
            Brand: Well known (original not imitation)
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Pullover/t-shirt
            Material: 100% cotton
            Style: Crew/round neck
            Sleeve length: Short
            Color: No design; solid color
            Size: For ages 6-12, boy
            Exclude: High-price brand and similar brand quality (like Hanes, Jockey, etc).
            Specify: Brand'),
            array('pcode' => '1103121030','pname' => 'Boy\'s dress shirt, WKB-M [1 Piece]','pspecs' => 'Boy\'s dress shirt, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: 50-80% cotton
            Sleeve length: Long
            Collar: Yes
            Color: No design; solid color
            Size: For ages 6-12, boy
            Specify: Brand'),
            array('pcode' => '1103121040','pname' => 'Boy\'s jacket, WKB-M [1 Piece]','pspecs' => 'Boy\'s jacket, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: 50-80% polyester
            Length: Hip length
            Lining: Permanent lining
            Color: No design; solid color
            Size: For ages 6-12, boy
            Specify: Brand'),
            array('pcode' => '1103121050','pname' => 'Boy\'s shorts, WKB-M [1 Piece]','pspecs' => 'Boy\'s shorts, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Cotton-polyester (50-80% cotton)
            Length: Knee
            Color: Solid color
            Size: For ages 6-12, boy
            Specify: Brand'),
            array('pcode' => '1103121060','pname' => 'Boy\'s sweater or pullover, WKB-M [1 Piece]','pspecs' => 'Boy\'s sweater or pullover, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: 50-80% wool
            Style: Pullover
            Sleeve length: Long
            Color: No design; solid color
            Size: For ages 6-12, boy
            Specify: Brand'),
            array('pcode' => '1103121070','pname' => 'Boys trousers/slacks/pants, WKB-M [1 Piece]','pspecs' => 'Boys trousers/slacks/pants, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Cotton-Polyester (50-80% cotton)
            Color: Solid color
            Size: For ages 6-12, boy
            Specify: Brand'),
            array('pcode' => '1103121080','pname' => 'Boy\'s underwear/brief, WKB-M [1 Piece]','pspecs' => 'Boy\'s underwear/brief, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Regular
            Material: 100% cotton
            Style: Brief
            Color: White
            Size: For ages 6-12, boy
            Specify: Brand'),
            array('pcode' => '1103121090','pname' => 'Boy\'s undershirt, sleeveless, WKB-M [1 Piece]','pspecs' => 'Boy\'s undershirt, sleeveless, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Regular
            Material: 100% cotton
            Style: Sleeveless athletic shirt
            Color: White
            Size: For ages 6-12, boy
            Specify: Brand'),
            array('pcode' => '1103121100','pname' => 'Children\'s blue jeans, WKB-M [1 Piece]','pspecs' => 'Children\'s blue jeans, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Children\'s jeans trousers
            Material: 100 % cotton denim
            Style: Straight, with zip or buttons
            Length: Long
            Color: Blue
            Pattern: Plain
            Size: For ages 6-9, boy or girl
            Specify: Brand'),
            array('pcode' => '1103121110','pname' => 'Children\'s blue jeans, BL [1 Piece]','pspecs' => 'Children\'s blue jeans, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Children\'s jeans trousers
            Material: Approx. 100 % cotton denim, elastane allowed
            Style: Straight, with zip or buttons
            Length: Long
            Color: Blue
            Pattern: Plain or washed
            Size: For ages 6-9, boy or girl
            Specify: Label, if any'),
            array('pcode' => '1103121120','pname' => 'Children\'s briefs, WKB-L [1 Piece]','pspecs' => 'Children\'s briefs, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Children\'s briefs
            Material: Approx. 100 % cotton, some elastane allowed
            Package: 1-3 pieces
            Style: Elasticated waist
            Size: For ages 6-9, boy or girl
            Specify: Brand, number of pieces in package'),
            array('pcode' => '1103121130','pname' => 'Children\'s school shirt, WKB-M [1 Piece]','pspecs' => 'Children\'s school shirt, WKB-M
            Brand: Well Known
            Brand Stratum: Medium
            Preferred quantity: 1 Piece
            Type: School shirt, short sleeves
            Material: Min. 50 % cotton, rest synthetic
            Style: With or without pleat in back
            Sleeve length: Short
            Collar: Collar
            Color: Single color
            Pattern: Plain, simple pattern allowed
            Size: For ages 6-9, boy or girl
            Specify: Brand'),
            array('pcode' => '1103121140','pname' => 'Children\'s socks, casual, WKB-M [1 Pair]','pspecs' => 'Children\'s socks, casual, WKB-M
            Brand: Well known (original not imitation)
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Material: 100% cotton
            Length: Midcalf
            Color: No design; solid color
            Exclude: High-price brand and similar brand quality (like Hanes, etc).
            Specify: Brand'),
            array('pcode' => '1103121150','pname' => 'Children\'s socks, sports, WKB-M [1 Pair]','pspecs' => 'Children\'s socks, sports, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Material: Above 80% cotton
            Package: May price multipack of 3 pairs
            Length: Mid-calf
            Color: No design; solid color
            Specify: Brand and number of pairs priced if from multipack'),
            array('pcode' => '1103121160','pname' => 'Girl\'s blue jeans, WKB-M [1 Piece]','pspecs' => 'Girl\'s blue jeans, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: 100% cotton denim
            Style: Legs hemmed w/o cuffs
            Length: Long
            Size: For ages 6-12, girl
            Specify: Brand'),
            array('pcode' => '1103121170','pname' => 'Girl\'s bra, WKB-M [1 Piece]','pspecs' => 'Girl\'s bra, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Bandeau bra
            Material: 100% cotton
            Size: For ages 6-12, girl
            Specify: Brand'),
            array('pcode' => '1103121180','pname' => 'Girl\'s cardigan, WKB-M [1 Piece]','pspecs' => 'Girl\'s cardigan, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Cotton/polyester
            Style: U-neck or V-neck
            Length: Hip length
            Sleeve length: Long
            Color: No design; solid color
            Size: For ages 6-12, girl
            Specify: Brand'),
            array('pcode' => '1103121190','pname' => 'Girls\' dress, WKB-M [1 Piece]','pspecs' => 'Girls\' dress, WKB-M
            Brand: Well Known
            Brand Stratum: Medium
            Preferred quantity: 1 Piece
            Type: Girls\' dress (boden)
            Material: 100 % cotton, some elastane allowed
            Style: Straight slightly flared at the bottom, with buttons or zip at the back
            Length: Below knee
            Sleeve length: Short
            Color: One or two colors; possibly with some embroidery
            Pattern: Plain, simple printed design allowed
            Size: For ages 4-6, girl
            Specify: Brand'),
            array('pcode' => '1103121200','pname' => 'Girl\'s skirt, WKB-M [1 Piece]','pspecs' => 'Girl\'s skirt, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: 50-80% cotton
            Style: Straight or A line
            Length: Short (approx. knee length or shorter)
            Color: No design; solid color
            Size: For ages 7-14, girl
            Specify: Brand'),
            array('pcode' => '1103121210','pname' => 'Girl\'s slacks/pants/ trousers, WKB-M [1 Piece]','pspecs' => 'Girl\'s slacks/pants/ trousers, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Cotton-Polyester (50-80% cotton)
            Length: Long
            Color: No design; solid color
            Size: For ages 6-12, girl
            Specify: Brand'),
            array('pcode' => '1103121220','pname' => 'Girl\'s T-Shirt/top, WKB-M [1 Piece]','pspecs' => 'Girl\'s T-Shirt/top, WKB-M
            Brand: Well known (original not imitation)
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: 100% cotton
            Style: Pullover/t-shirt; crew/round neck
            Sleeve length: Short
            Color: No design/solid; single color
            Size: For ages 6-12, girl
            Exclude: High-price brand and similar brand quality (like Hanes etc).
            Specify: Brand'),
            array('pcode' => '1103121230','pname' => 'Infant\'s dress, WKB-M [1 Piece]','pspecs' => 'Infant\'s dress, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Cotton polyester (50-80% cotton); woven
            Color: No design; solid color
            Size: Infants
            Specify: Brand'),
            array('pcode' => '1103121240','pname' => 'Infant\'s overalls/Baby rompers, WKB-M [1 Piece]','pspecs' => 'Infant\'s overalls/Baby rompers, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Above 80% cotton; woven
            Style: Short sleeves, long shorts
            Color: No design; solid color
            Size: Infants
            Exclude: Overalls and rompers that cover the feet, or with long sleeves
            Specify: Brand'),
            array('pcode' => '1103121250','pname' => 'Men\'s blue jeans, LEVI\'S [1 Piece]','pspecs' => 'Men\'s blue jeans, LEVI\'S
            Brand: Levi\'s
            Preferred quantity: 1 Piece
            Type: Original Levi\'s jeans, 501 or similar model
            Material: Above 80% cotton
            Style: Straight, with zip or button fly
            Length: Long
            Lining: No
            Color: Blue
            Pattern: Plain or washed
            Size: Adult medium
            Exclude: Models with rips and/or special applications
            Specify: Model name'),
            array('pcode' => '1103121260','pname' => 'Men\'s blue jeans, WKB-L [1 Piece]','pspecs' => 'Men\'s blue jeans, WKB-L
            Brand: Well Known - Low
            Preferred quantity: 1 Piece
            Type: Men\'s basic blue jeans
            Material: Approx. 100 % cotton denim, elastane allowed
            Style: Straight
            Length: Long
            Lining: No
            Color: Blue
            Pattern: Plain or washed
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121270','pname' => 'Men\'s dress shirt, 100% cotton, WKB-M [1 Piece]','pspecs' => 'Men\'s dress shirt, 100% cotton, WKB-M
            Brand: Well Known - Medium
            Preferred quantity: 1 Piece
            Type: Men\'s classic shirt, long sleeves
            Material: 100 % cotton
            Style: Straight, open front, with buttons
            Sleeve length: Long
            Color: Single color
            Pattern: Plain, simple pattern allowed
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121280','pname' => 'Men\'s dress shirt, 50-65% cotton, WKB-M [1 Piece]','pspecs' => 'Men\'s dress shirt, 50-65% cotton, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Business/dress shirt (exact collar size)
            Material: 50-65% cotton
            Sleeve length: Long
            Color: No design; solid color
            Specify: Brand'),
            array('pcode' => '1103121290','pname' => 'Men\'s Kurta, BNR [1 Set]','pspecs' => 'Men\'s Kurta, BNR
            Brand: Not relevant
            Brand stratum: Medium
            Preferred quantity: 1 Set
            Material: Cotton (80% or more)
            Package: Set of 2 pieces (kurta and pants)
            Style: Traditional
            Length: Below knee (calf to floor)
            Size: Average (S, M, L, XL)
            Specify: Label, if any'),
            array('pcode' => '1103121300','pname' => 'Men\'s pajama set, BNR [1 Set]','pspecs' => 'Men\'s pajama set, BNR
            Brand: Not relevant
            Brand stratum: Medium
            Preferred quantity: 1 Set
            Material: 80-100% cotton
            Style: Long sleeve (pajama top)
            Size: Average (S, M, L, XL)
            Specify: Label, if any'),
            array('pcode' => '1103121310','pname' => 'Men\'s pullover, 50-80% wool mix, WKB-M [1 Piece]','pspecs' => 'Men\'s pullover, 50-80% wool mix, WKB-M
            Brand: Well Known
            Brand Stratum: Medium
            Preferred quantity: 1 Piece
            Type: Men\'s pullover (sweater), long sleeves
            Material: Wool or mixed fibres (min. 50-80 % wool)
            Style: Classic, with elasticated/ribbed waist, cuffs and neck
            Sleeve length: Long
            Lining: No
            Collar: Round or V-neck
            Color: Single color or simple pattern allowed
            Pattern: Plain
            Size: Adult medium
            Exclude: Hood
            Specify: Brand'),
            array('pcode' => '1103121320','pname' => 'Men\'s pullover,above 80% wool, WKB-M [1 Piece]','pspecs' => 'Men\'s pullover,above 80% wool, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Above 80% wool
            Style: Pullover
            Sleeve length: Long
            Color: No design; solid color
            Size: Regular adult size (S, M, L, XL)
            Specify: Brand'),
            array('pcode' => '1103121330','pname' => 'Men\'s sarong or lungi, WKB-M [1 Piece]','pspecs' => 'Men\'s sarong or lungi, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Men\'s sarong
            Material: Above 80% cotton
            Size: Width - 1 to 3 m; Length - 1.4 m
            Specify: Brand'),
            array('pcode' => '1103121340','pname' => 'Men\'s shorts, WKB-M [1 Piece]','pspecs' => 'Men\'s shorts, WKB-M
            Brand: Well known (original not imitation)
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: 100% cotton
            Style: Jersey
            Color: No design; solid color
            Size: Regular
            Exclude: High-price brand and similar brand quality (like Hanes, Jockey, etc).
            Specify: Brand'),
            array('pcode' => '1103121350','pname' => 'Men\'s socks, WKB-M [1 Pair]','pspecs' => 'Men\'s socks, WKB-M
            Brand: Well known (original not imitation)
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Material: 100% cotton
            Style: calf (dress) socks; Fine rib knit; elasticated top
            Length: 32 cm
            Size: Average (10-13)
            Exclude: High-price brand and similar brand quality (like Hanes, etc).
            Specify: Brand'),
            array('pcode' => '1103121360','pname' => 'Men\'s suit, 100% synthetic fiber, WKB-L [1 Suit]','pspecs' => 'Men\'s suit, 100% synthetic fiber, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Suit
            Type: Men\'s classic two-piece
            Material: 100% synthetic fiber
            Style: Jacket
            Sleeve length: Long
            Lining: Jacket
            Color: Dark
            Pattern: Plain, stripes allowed
            Size: Adult medium
            Exclude: Waistcoat
            Specify: Brand'),
            array('pcode' => '1103121370','pname' => 'Men\'s suit, wool, WKB-M [1 Suit]','pspecs' => 'Men\'s suit, wool, WKB-M
            Brand: Well Known
            Brand Stratum: Medium
            Preferred quantity: 1 Suit
            Type: Men\'s classic two-piece
            Material: 50% wool
            Style: Jacket
            Sleeve length: Long
            Lining: Jacket
            Color: Dark
            Pattern: Plain, stripes allowed
            Size: Adult medium
            Exclude: Waistcoat
            Specify: Brand'),
            array('pcode' => '1103121380','pname' => 'Men\'s trousers, cotton mix, WKB-L [1 Piece]','pspecs' => 'Men\'s trousers, cotton mix, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Men\'s trousers for summer or warm weather
            Material: Min. 50 % cotton, rest polyester
            Style: With loops for belt
            Length: Long
            Lining: No
            Color: Single color
            Pattern: Plain
            Size: Adult medium
            Specify: Brand, material'),
            array('pcode' => '1103121390','pname' => 'Men\'s T-shirt with collar, WKB-M [1 Piece]','pspecs' => 'Men\'s T-shirt with collar, WKB-M
            Brand: Well known (original not imitation)
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Sport shirt (open front/average collar size, t-shirt with collar)
            Material: 100% cotton
            Exclude: High-price brand and similar brand quality (like Hanes, Jockey, etc).
            Specify: Brand'),
            array('pcode' => '1103121400','pname' => 'Men\'s T-shirt, WKB-L [1 Piece]','pspecs' => 'Men\'s T-shirt, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Men\'s regular t-shirt, short sleeves
            Material: 100 % cotton
            Style: Straight
            Sleeve length: Short
            Collar: Round neck
            Color: Single color
            Pattern: Plain, simple pattern allowed
            Size: Adult medium
            Exclude: Underwear
            Specify: Brand'),
            array('pcode' => '1103121410','pname' => 'Men\'s undershirt, WKB-M [1 Piece]','pspecs' => 'Men\'s undershirt, WKB-M
            Brand: Well known (original not imitation)
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Regular, sleeveless
            Material: 100% cotton
            Color: No design, white
            Size: Regular adult size (S, M, L, XL)
            Exclude: High-price brand and similar brand quality (like Hanes, Jockey, etc).
            Specify: Brand'),
            array('pcode' => '1103121420','pname' => 'Men\'s underwear/briefs, WKB-M [1 Piece]','pspecs' => 'Men\'s underwear/briefs, WKB-M
            Brand: Well known (original not imitation)
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Regular
            Material: 100% Cotton
            Style: Regular brief
            Color: No design, white color
            Size: Regular adult size (S, M, L, XL)
            Exclude: High-price brand and similar brand quality (like Hanes, etc).
            Specify: Brand'),
            array('pcode' => '1103121430','pname' => 'Saree 5.5m, polyester, BL [1 Piece]','pspecs' => 'Saree 5.5m, polyester, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Material: 100% polyester
            Style: Saris
            Size: 5.5 meter, 112 cm width
            Specify: Brand'),
            array('pcode' => '1103121450','pname' => 'Women\'s skirt, synthetic, WKB-L [1 Piece]','pspecs' => 'Women\'s skirt, synthetic, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Women’s skirt
            Material: 100 % polyester, elastane allowed
            Style: Straight, smooth seams; with belt loop and zipper
            Length: Knee
            Color: Single color
            Pattern: Plain, simple pattern allowed
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121460','pname' => 'Women\'s blazer, cotton, WKB-M [1 Piece]','pspecs' => 'Women\'s blazer, cotton, WKB-M
            Brand: Well Known
            Brand Stratum: Medium
            Preferred quantity: 1 Piece
            Type: Women\'s casual blazer
            Material: 100 % cotton, corduroy allowed; some elastane allowed
            Style: Casual with buttons and pockets
            Length: Hip
            Sleeve length: Long
            Lining: Yes
            Collar: Collar, tailored or upright
            Color: Single color
            Pattern: Plain, simple pattern allowed
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121470','pname' => 'Women\'s blouse, Close-fitted, WKB-L [1 Piece]','pspecs' => 'Women\'s blouse, Close-fitted, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Women\'s blouse, long sleeves
            Material: Mainly synthetic, cotton mix allowed
            Style: Close-fitted, "shaped", no pleats, with buttons
            Sleeve length: Long
            Collar: Collar
            Color: Single color
            Pattern: Plain, simple pattern allowed
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121480','pname' => 'Women\'s blouse, Western style, WKB-M [1 Piece]','pspecs' => 'Women\'s blouse, Western style, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Cotton polyester (50%-80% cotton)
            Style: Western style; not Sari
            Sleeve length: Long
            Collar: Yes
            Color: No design; solid, single color
            Size: Regular adult
            Specify: Brand'),
            array('pcode' => '1103121490','pname' => 'Women\'s blue jeans, WKB-L [1 Piece]','pspecs' => 'Women\'s blue jeans, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Women\'s basic blue jeans
            Material: Approx. 100 % cotton denim, elastane allowed
            Style: Straight
            Length: Long
            Color: Blue
            Pattern: Plain or washed
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121500','pname' => 'Women\'s brassiere, basic, WKB-L [1 Piece]','pspecs' => 'Women\'s brassiere, basic, WKB-L
            Brand: Well known
            Brand stratum: Low
            Preferred quantity: 1 Piece
            Material: Above 80% cotton
            Package: Multipacks containing up to 3 pieces may be priced
            Size: A; B; or C cups; Regular adult
            Specify: Brand'),
            array('pcode' => '1103121510','pname' => 'Women\'s cardigan, WKB-M [1 Piece]','pspecs' => 'Women\'s cardigan, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Cotton/polyester
            Style: V-neck
            Length: Hip length
            Sleeve length: Long
            Size: Regular adult
            Specify: Brand'),
            array('pcode' => '1103121520','pname' => 'Women\'s casual dress, WKB-M [1 Piece]','pspecs' => 'Women\'s casual dress, WKB-M
            Brand: Well Known
            Brand Stratum: Medium
            Preferred quantity: 1 Piece
            Type: Women\'s sundress, sleeveless or with short sleeves
            Material: Cotton, viscose or mix of them
            Style: Slightly flared, wide hem
            Length: Between knee and ankle
            Sleeve length: Sleeveless or short sleeves
            Color: Single color or simple pattern allowed
            Pattern: Allowed
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121530','pname' => 'Women\'s jacket, WKB-M [1 Piece]','pspecs' => 'Women\'s jacket, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Straight single breasted
            Material: Cotton-polyester (35%-65% cotton)
            Style: Tailored jacket/blazer/classic
            Sleeve length: Long Sleeve
            Lining: Full lining; viscose
            Collar: Yes
            Color: No design; solid color
            Size: Regular adult
            Specify: Brand'),
            array('pcode' => '1103121540','pname' => 'Women\'s kurta, WKB-M [1 Set]','pspecs' => 'Women\'s kurta, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Set
            Material: 65% cotton; 35% polyester
            Package: set of 3 pieces
            Specify: Brand'),
            array('pcode' => '1103121550','pname' => 'Women\'s nightgown, 50-80% cotton, WKB-M [1 Piece]','pspecs' => 'Women\'s nightgown, 50-80% cotton, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Cotton polyester blend (50-80% cotton)
            Style: Pullover
            Length: Knee length or shorter
            Color: No design; solid color
            Size: Regular women\'s size
            Specify: Brand'),
            array('pcode' => '1103121560','pname' => 'Women\'s pantyhose, WKB-M [1 Piece]','pspecs' => 'Women\'s pantyhose, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Regular pantyhose; sheer
            Material: 100% nylon
            Style: Pantyhose
            Specify: Brand'),
            array('pcode' => '1103121570','pname' => 'Women\'s pullover, WKB-M [1 Piece]','pspecs' => 'Women\'s pullover, WKB-M
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Women\'s pullover
            Material: Cotton/polyester
            Style: Basic straight model, ribbed cuffs and waist
            Sleeve length: Long
            Lining: No
            Collar: V-neck or round or high neck
            Color: Single color
            Pattern: Plain
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121580','pname' => 'Women\'s shorts, WKB-M [1 Piece]','pspecs' => 'Women\'s shorts, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Above 80% cotton
            Color: No design; solid color
            Size: Regular adult
            Specify: Brand'),
            array('pcode' => '1103121590','pname' => 'Women\'s socks, WKB-M [1 Pair]','pspecs' => 'Women\'s socks, WKB-M
            Brand: Well known (original not imitation)
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Material: 100% cotton
            Length: Midcalf
            Color: Solid
            Size: Regular adult size
            Exclude: High-price brand and similar brand quality (like Hanes, etc).
            Specify: Brand'),
            array('pcode' => '1103121600','pname' => 'Women\'s straight trousers, synthetic, WKB-L [1 Piece]','pspecs' => 'Women\'s straight trousers, synthetic, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Women\'s basic straight or slightly flared trousers
            Material: 100 % polyester, elastane allowed
            Style: Straight or slightly flared with zip or button
            Length: Long
            Color: Single color
            Pattern: Plain, simple pattern allowed
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121610','pname' => 'Women\'s suit, jacket and pants, BNR [1 Set]','pspecs' => 'Women\'s suit, jacket and pants, BNR
            Brand: Not relevant
            Brand stratum: Medium
            Preferred quantity: 1 Set
            Material: Cotton polyester (50%-80% cotton)
            Style: Business suit; single breasted
            Length: Jacket - hip length; pants - long
            Sleeve length: Long
            Lining: Lined
            Color: No design; solid color
            Size: Regular adult
            Specify: Brand, if any'),
            array('pcode' => '1103121620','pname' => 'Women\'s swimsuit, WKB-M [1 Piece]','pspecs' => 'Women\'s swimsuit, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: 50-80% nylon; polyamide / elastane material
            Style: One-piece swimwear
            Lining: Unlined
            Color: Multicolor (fiber or yarn dyed)
            Size: Regular adult size
            Specify: Brand'),
            array('pcode' => '1103121630','pname' => 'Women\'s trousers/slacks/pants, 50-80% cotton, WKB-M [1 Piece]','pspecs' => 'Women\'s trousers/slacks/pants, 50-80% cotton, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Cotton polyester (50%-80% cotton)
            Color: No design; solid color
            Size: Regular adult
            Specify: Brand'),
            array('pcode' => '1103121640','pname' => 'Women\'s T-shirt, WKB-M [1 Piece]','pspecs' => 'Women\'s T-shirt, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: 100% cotton
            Style: T-shirt; round neck
            Sleeve length: Short
            Color: No design; solid/single color
            Size: Regular adult
            Exclude: High-price brand and similar brand quality (like Hanes, etc).
            Specify: Brand'),
            array('pcode' => '1103121650','pname' => 'Women\'s underwear/panties, briefs,WKB-M [1 Piece]','pspecs' => 'Women\'s underwear/panties, briefs,WKB-M
            Brand: Well Known
            Brand Stratum: Medium
            Preferred quantity: 1 Piece
            Type: Women\'s briefs
            Material: 100 % cotton, some elastane allowed
            Package: Multipack containing up to 3 items maybe priced
            Style: Tai, with elastic waistband and lined gusset
            Color: Single color
            Pattern: Plain
            Size: Adult medium
            Specify: Brand'),
            array('pcode' => '1103121670','pname' => 'Women\'s underwear/panties,bikini,WKB-M [1 Piece]','pspecs' => 'Women\'s underwear/panties,bikini,WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Bikini panty
            Material: Above 80% cotton
            Color: No design; solid color
            Size: Regular women\'s sizes
            Specify: Brand'),
            array('pcode' => '1103121680','pname' => 'Women\'s winter dress, WKB-M [1 Piece]','pspecs' => 'Women\'s winter dress, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Informal; daytime
            Material: 50-80% wool
            Style: A-line
            Length: Mid-calf dress
            Sleeve length: Long or 3/4
            Lining: Unlined dress
            Color: No design; solid/single color
            Specify: Brand'),
            array('pcode' => '1103121690','pname' => 'Men\'s boxer briefs, WKB-L [1 Piece]','pspecs' => 'Men\'s boxer briefs, WKB-L
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Men\'s boxer briefs
            Material: Approximately 100 % cotton, some elastane allowed
            Package: 1-3 pieces
            Style: Low waist, with fly
            Lining: Double thickness at front
            Pattern: Plain
            Size: Adult medium
            Exclude: Multipack
            Specify: Brand, number of pieces in package
            Notes: New item'),
            array('pcode' => '1103121700','pname' => 'Women\'s summer pants, WKB-M [1 Piece]','pspecs' => 'Women\'s summer pants, WKB-M
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Women\'s summer pants
            Material: Min. 50 % cotton, rest polyester (S)
            Style: Slacks with zipper
            Length: 3/4 (calf)
            Color: Single color
            Pattern: Plain, simple pattern allowed
            Size: Adult medium
            Specify: Brand, material
            Notes: New item'),
            array('pcode' => '1103121710','pname' => 'Men\'s blazer jacket, WKB-L [1 Piece]','pspecs' => 'Men\'s blazer jacket, WKB-L
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Men\'s bomber jacket
            Material: Cotton, synthetic or mix
            Style: Casual, with zip fastener
            Length: Hip
            Sleeve length: Long
            Color: Single color
            Pattern: Plain
            Size: Adult medium
            Exclude: Hood
            Specify: Brand
            Notes: New item'),
            array('pcode' => '1103121720','pname' => 'Children\'s undershirt, WKB-L [1 Piece]','pspecs' => 'Children\'s undershirt, WKB-L
            Brand: Well known
            Brand stratum: Low
            Preferred quantity: 1 Piece
            Type: Undershirt for boys or girls
            Material: Approx. 100 % cotton, some elastane allowed
            Style: With sleeves
            Color: Single color
            Pattern: Plain, simple pattern allowed
            Size: For ages 6-9, boy or girl
            Specify: Brand'),
            array('pcode' => '1103141010','pname' => 'Cleaning, men\'s shirt [1 Service]','pspecs' => 'Cleaning, men\'s shirt
            Preferred quantity: 1 Service
            Service: Machine washing and ironing
            Service type: Standard
            Garment: Men\'s shirt
            Material: Cotton
            Price includes: Basic wire-hanger and plastic cover
            Exclude: Self-service, "express" service, home collection, home delivery'),
            array('pcode' => '1103141020','pname' => 'Dry cleaning, men\'s two-piece suit [1 Service]','pspecs' => 'Dry cleaning, men\'s two-piece suit
            Preferred quantity: 1 Service
            Service: Dry-cleaning and ironing
            Service type: Standard
            Garment: Men\'s two-piece suit, dark colored
            Material: Wool or wool mixture
            Price includes: Basic wire-hanger and plastic cover
            Exclude: Self-service, "express" service, home collection, home delivery'),
            array('pcode' => '1103141030','pname' => 'Dry cleaning, women\'s dress [1 Service]','pspecs' => 'Dry cleaning, women\'s dress
            Preferred quantity: 1 Service
            Service: Dry-cleaning and ironing
            Service type: Standard
            Garment: Women\'s one piece dress, dark colored
            Material: Wool or wool mixture
            Price includes: Basic wire-hanger and plastic cover
            Exclude: Self-service, "express" service, home collection, home delivery, evening dress'),
            array('pcode' => '1103211010','pname' => 'Boy\'s sandals, WKB-M [1 Pair]','pspecs' => 'Boy\'s sandals, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Type: Summer sandals
            Style: Slip-on, 1 or 2 straps
            Upper (top): Leather
            Sole: Synthetic
            Size: For ages 6-9, boy
            Specify: Brand'),
            array('pcode' => '1103211020','pname' => 'Children\'s lace-up shoes, WKB-M [1 Pair]','pspecs' => 'Children\'s lace-up shoes, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Type: Dress or formal walking shoes
            Style: Laces
            Upper (top): Leather (nubuck or suede)
            Sole: Synthetic
            Heel: Synthetic
            Size: For ages 6-9, boy or girl
            Specify: Brand'),
            array('pcode' => '1103211030','pname' => 'Girl\'s dress shoes, WKB-M [1 Pair]','pspecs' => 'Girl\'s dress shoes, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Type: Dress shoes for girls
            Upper (top): Synthetic
            Sole: Synthetic
            Size: For ages 8-12, girl
            Specify: Brand'),
            array('pcode' => '1103211040','pname' => 'Girl\'s sandals, WKB-M [1 Pair]','pspecs' => 'Girl\'s sandals, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Type: Summer sandals
            Style: Slip-on, 1 or 2 straps
            Upper (top): Leather
            Sole: Synthetic
            Size: For ages 6-9, girl
            Specify: Brand'),
            array('pcode' => '1103211050','pname' => 'Men\'s dress shoes, WKB-L [1 Pair]','pspecs' => 'Men\'s dress shoes, WKB-L
            Brand: Well Known
            Brand stratum: Low
            Preferred quantity: 1 Pair
            Type: Classic dress shoes, similar to derby or oxford style
            Style: Laces and metal eyelets
            Upper (top): Synthetic leather
            Sole: Synthetic
            Heel: Synthetic
            Exclude: Real leather
            Specify: Brand'),
            array('pcode' => '1103211060','pname' => 'Men\'s sport shoes, ADIDAS, ASICS [1 Pair]','pspecs' => 'Men\'s sport shoes, ADIDAS, ASICS
            Brand: Adidas, Asics
            Model: Solarboost 5 (ADIDAS), GT 2000 11 (ASICS)
            Preferred quantity: 1 Pair
            Type: Running shoes
            Style: Laces
            Upper (top): Synthetic
            Sole: Synthetic
            Specify: Brand, model'),
            array('pcode' => '1103211070','pname' => 'Men\'s sport shoes, NIKE [1 Pair]','pspecs' => 'Men\'s sport shoes, NIKE
            Brand: Nike
            Model: React (NIKE)
            Preferred quantity: 1 Pair
            Type: Running shoes
            Style: Laces
            Upper (top): Synthetic
            Sole: Synthetic
            Specify: Brand, model'),
            array('pcode' => '1103211080','pname' => 'Slippers, men\'s/women\'s, WKB-M [1 Pair]','pspecs' => 'Slippers, men\'s/women\'s, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Type: Slip-on, without heel strap
            Sole: Plastic or rubber
            Size: 4-12
            Specify: Brand and size'),
            array('pcode' => '1103211090','pname' => 'Women\'s dress shoes, WKB-M [1 Pair]','pspecs' => 'Women\'s dress shoes, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Type: Classic dress or court shoes
            Style: Without decoration
            Upper (top): Leather
            Sole: Synthetic
            Heel: Synthetic
            Heel height: Approximately 5-8 cm
            Specify: Brand'),
            array('pcode' => '1103211100','pname' => 'Women\'s flat shoes, WKB-L [1 Pair]','pspecs' => 'Women\'s flat shoes, WKB-L
            Brand: Well Known
            Brand stratum: Low
            Preferred quantity: 1 Pair
            Type: Flat shoes, loafers
            Style: Without decoration, closed type
            Upper (top): Textile
            Sole: Synthetic
            Heel: Synthetic
            Heel height: Less than 3 cm
            Specify: Brand'),
            array('pcode' => '1103211110','pname' => 'Women\'s house slippers, WKB-M [1 Pair]','pspecs' => 'Women\'s house slippers, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Type: Slip-on
            Style: Not cushioned, unlined
            Upper (top): Fabric
            Sole: Synthetic, man-made
            Size: 6-8
            Specify: Brand and size'),
            array('pcode' => '1103211120','pname' => 'Women\'s sandals, WKB-M [1 Pair]','pspecs' => 'Women\'s sandals, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Type: Sandals, one-width-fits-all
            Style: Heel and instep strap
            Upper (top): Synthetic
            Sole: Rubber
            Size: 6-8
            Specify: Brand and size'),
            array('pcode' => '1103211130','pname' => 'Men\'s boat shoes, WKB-M [1 Pair]','pspecs' => 'Men\'s boat shoes, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Pair
            Type: Boat shoes
            Style: Stitched insole and sole, with laces
            Upper (top): Leather
            Sole: Synthetic
            Heel: Synthetic
            Specify: Brand'),
            array('pcode' => '1103211140','pname' => 'Men\'s loafers, WKB-L [1 Pair]','pspecs' => 'Men\'s loafers, WKB-L
            Brand: Well Known
            Brand stratum: Low
            Preferred quantity: 1 Pair
            Type: Loafer shoes
            Style: Casual, no laces
            Upper (top): Synthetic leather
            Sole: Synthetic
            Heel: Synthetic
            Specify: Brand'),
            array('pcode' => '1103221010','pname' => 'Shoe repair, men\'s dress shoes [1 Service]','pspecs' => 'Shoe repair, men\'s dress shoes
            Preferred quantity: 1 Service
            Service: Re-soling rubber soles (glued and nailed or stitched) to be done on 2 shoes (1 pair)
            Service type: Shop drop-in, standard service finishing time
            Service facility: In-shop service
            Shoe type: Men\'s classic shoes
            Heel material: Rubber
            Price includes: Materials
            Exclude: While-you-wait service, "express" service'),
            array('pcode' => '1103221020','pname' => 'Shoe repair, women\'s dress shoes, while-you-wait [1 Service]','pspecs' => 'Shoe repair, women\'s dress shoes, while-you-wait
            Preferred quantity: 1 Service
            Service: Replacement of 2 heels (glued and nailed)
            Service type: While-you-wait
            Service facility: In-shop service
            Shoe type: Women\'s classic dress or court shoes, with heels approx. 5-8cm
            Heel material: Synthetic, small heel
            Price includes: Materials'),
            array('pcode' => '1103221030','pname' => 'Shoe shine, men\'s classic shoes, while-you-wait [1 Service]','pspecs' => 'Shoe shine, men\'s classic shoes, while-you-wait
            Preferred quantity: 1 Service
            Service: Manual cleaning and polish of leather shoes
            Service type: While-you-wait
            Service facility: Out-shop service
            Shoe type: Men\'s classic shoes
            Exclude: Service provided in a shop or store'),
            array('pcode' => '1104311010','pname' => 'Interior varnish, WKB [1 Liter]','pspecs' => 'Interior varnish, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.25 Liter
            Type: Liquid varnish, solvent-based
            Packaging: Glass container, or tin
            Specify: Brand and observed quantity'),
            array('pcode' => '1104311020','pname' => 'Nylon brush, WKB [1 Piece]','pspecs' => 'Nylon brush, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Wood handle, nylon bristle
            Dimensions: Length of Bristles
            Specify: Brand'),
            array('pcode' => '1104311030','pname' => 'Paint, indoor use, latex/acrylic, WKB [1 Liter]','pspecs' => 'Paint, indoor use, latex/acrylic, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.25 Liter
            Type: Ready-to-use indoor paint, latex/acrylic
            Packaging: Plastic container, or tin
            Color: Color pre-mixed in factory, gloss
            Exclude: Decorative paint
            Specify: Brand and observed quantity'),
            array('pcode' => '1104311040','pname' => 'Paint, indoor use, oil based, WKB [1 Liter]','pspecs' => 'Paint, indoor use, oil based, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.25 Liter
            Type: Ready-to-use indoor paint, oil based
            Packaging: Plastic container, or tin
            Color: Color pre-mixed in factory, semi-gloss
            Exclude: Decorative paint
            Specify: Brand and observed quantity'),
            array('pcode' => '1104311050','pname' => 'Paint, indoor use, WKB [10 Liter]','pspecs' => 'Paint, indoor use, WKB
            Brand: Well Known
            Preferred quantity: 10
            Quantity range: 3.5 - 10 Liter
            Type: Ready-to-use indoor paint, acrylic washable emulsion, no water to be added
            Coverage: 7-12 m2 per liter
            Packaging: Plastic container, or tin
            Color: White, mat finish
            Exclude: Decorative paint
            Specify: Brand'),
            array('pcode' => '1104311060','pname' => 'Paint, outdoor use, WKB [10 Liter]','pspecs' => 'Paint, outdoor use, WKB
            Brand: Well Known
            Preferred quantity: 10
            Quantity range: 8 - 17 Liter
            Type: Acryl, weatherproof outdoor paint, for walls
            Coverage: 7-12 m2 per liter
            Packaging: Plastic container, or tin
            Color: White, mat finish
            Exclude: Decorative paint
            Specify: Brand'),
            array('pcode' => '1104311070','pname' => 'White wash interior, WKB [1 Kilogram]','pspecs' => 'White wash interior, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 0.75 - 1.25 Kilogram
            Type: Powder form, solvent-based
            Packaging: Paper bag
            Specify: Brand and observed quantity'),
            array('pcode' => '1104411010','pname' => 'Water supply, piped on premise, excluding sewerage [15 Cubic meter]','pspecs' => 'Water supply, piped on premise, excluding sewerage
            Preferred quantity: 15 Cubic meter
            Targeted consumption: 15 Cubic meter
            Service: Monthly household consumption, private or public water supply
            Purpose: Domestic use
            Water source: Piped into dwelling or yard/plot
            Price includes: Monthly cost of water supply meter (if present), fixed fees for use (if charged), and other related charges, including tax
            Price excludes: Sewerage charge and tax
            Exclude: Consumption of water provided/delivered in carters, tanker trucks and point-source vendors
            Specify: Method of calculation'),
            array('pcode' => '1104411020','pname' => 'Water supply, piped on premise, including sewerage [15 Cubic meter]','pspecs' => 'Water supply, piped on premise, including sewerage
            Preferred quantity: 15 Cubic meter
            Targeted consumption: 15 Cubic meter
            Service: Monthly household consumption, private or public water supply
            Purpose: Domestic use
            Water source: Piped into dwelling or yard/plot
            Price includes: Monthly cost of water supply meter (if present), sewerage fees, fixed fees for use (if charged), and other related charges, including tax
            Exclude: Consumption of water provided/delivered in carters, tanker trucks and point-source vendors
            Specify: Method of calculation'),
            array('pcode' => '1104511010','pname' => 'Electricity: 300 kWh annual consumption [1 Kilowatt-hour]','pspecs' => 'Electricity: 300 kWh annual consumption
            Preferred quantity: 1 Kilowatt-hour
            Targeted annual total consumption: 300
            Service: Annual total household consumption (equivalent to 25 kWh monthly consumption)
            Price includes: Basic fee, rent of meter, and all other related charges, including tax
            Specify: Method of calculation'),
            array('pcode' => '1104511020','pname' => 'Electricity: 600 kWh annual consumption [1 Kilowatt-hour]','pspecs' => 'Electricity: 600 kWh annual consumption
            Preferred quantity: 1 Kilowatt-hour
            Targeted annual total consumption: 600
            Service: Annual total household consumption (equivalent to 50 kWh monthly consumption)
            Price includes: Basic fee, rent of meter, and all other related charges, including tax
            Specify: Method of calculation'),
            array('pcode' => '1104511030','pname' => 'Electricity: 1200 kWh annual consumption [1 Kilowatt-hour]','pspecs' => 'Electricity: 1200 kWh annual consumption
            Preferred quantity: 1 Kilowatt-hour
            Targeted annual total consumption: 1200
            Service: Annual total household consumption (equivalent to 100 kWh monthly consumption)
            Price includes: Basic fee, rent of meter, and all other related charges, including tax
            Specify: Method of calculation'),
            array('pcode' => '1104511040','pname' => 'Electricity: 2500 kWh annual consumption [1 Kilowatt-hour]','pspecs' => 'Electricity: 2500 kWh annual consumption
            Preferred quantity: 1 Kilowatt-hour
            Targeted annual total consumption: 2500
            Service: Annual total household consumption (equivalent to 208 kWh monthly consumption)
            Price includes: Basic fee, rent of meter, and all other related charges, including tax
            Specify: Method of calculation'),
            array('pcode' => '1104521010','pname' => 'Liquefied gas, propane [10 kilogram]','pspecs' => 'Liquefied gas, propane
            Preferred quantity: 10
            Quantity range: 8 - 15 kilogram
            Type: Propane
            Purpose: For stoves and gas cookers
            Packaging: Bottle, canister or container
            Price excludes: Deposit and delivery charges to customer
            Specify: Observed quantity'),
            array('pcode' => '1104521020','pname' => 'Piped gas, utility gas supply, per cubic-meter [1 Cubic meter]','pspecs' => 'Piped gas, utility gas supply, per cubic-meter
            Preferred quantity: 1
            Quantity range: 1 Cubic meter
            Targeted consumption: Lowest slab/level of consumption
            Service: Monthly household consumption, private or public gas supply
            Type: Unknown, specify calorific value
            Purpose: For general residential homes; permanently available service
            Price includes: Basic fee, rent of meter, and all other related charges, including tax; Fee of 1 cubic meter consumption from the lowest slab/level of consumption
            Specify: Method of calculation
            Comments: If fixed rate is implemented (same amount paid regardless of consumption); do not price-just leave the observed price blank. If provided for free; just indicate in the remarks column that it is provided free of charge but do not put/place/indicate zero under observed price.'),
            array('pcode' => '1104521030','pname' => 'Piped gas, utility gas supply, per kW-hour [1 Kilowatt-hour]','pspecs' => 'Piped gas, utility gas supply, per kW-hour
            Preferred quantity: 1
            Quantity range: 1 Kilowatt-hour
            Targeted consumption: 100
            Service: Monthly household consumption, private or public gas supply
            Type: Calorific value interval of the gas
            Purpose: For general residential homes, permanently available service
            Price includes: Basic fee, rent of meter, and all other related charges, including tax
            Specify: Method of calculation'),
            array('pcode' => '1104531010','pname' => 'Charcoal, sack [1 Kilogram]','pspecs' => 'Charcoal, sack
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Charcoal for grill
            Packaging: Paper or plastic sack
            Exclude: Briquettes'),
            array('pcode' => '1104531020','pname' => 'Firewood, sack [1 Kilogram]','pspecs' => 'Firewood, sack
            Preferred quantity: 1
            Quantity range: 1 Kilogram
            Type: Locally-packed
            Packaging: Paper or plastic sack
            Price excludes: Drywood, ready to burn wood
            Exclude: Delivery charges'),
            array('pcode' => '1104531030','pname' => 'Kerosene, canister [1 Liter]','pspecs' => 'Kerosene, canister
            Preferred quantity: 1
            Quantity range: 0.5 - 2 Liter
            Type: 1-K clear, or equivalent
            Packaging: Tin can, Bottle, canister or container'),
            array('pcode' => '1105111010','pname' => 'Ceiling Light Fitting 5 Globes / Chandelier, with bulbs, BL [1 Piece]','pspecs' => 'Ceiling Light Fitting 5 Globes / Chandelier, with bulbs, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Ceiling lights/chandelier with 5 globe light fitting with wall switch
            Material: Plastic mounting body, glass shade or bulb covering
            Design: Hanging ceiling lights with 5 LED bulbs (8 to 13 watts each)
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111020','pname' => 'Ceiling Light Fitting 5 Globes / Chandelier, without bulb, BL [1 Piece]','pspecs' => 'Ceiling Light Fitting 5 Globes / Chandelier, without bulb, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Ceiling lights/chandelier with 5 globe light fitting with wall switch
            Material: Plastic mounting body, glass shade or bulb covering
            Design: Hanging ceiling lights (without bulbs)
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111030','pname' => 'Chair, Dining, BL [1 Piece]','pspecs' => 'Chair, Dining, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Contemporary dining chair with solid back, armless; Industrial production
            Material: Seat
            Design: Contemporary/modern style, slightly padded cushion
            Height: (of seat) 40-50 cm; (of back) 40-60 cm
            Width: 40-60 cm
            Depth: 40-50 cm
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111040','pname' => 'Chair, Plastic Molded Stacking, BL [1 Piece]','pspecs' => 'Chair, Plastic Molded Stacking, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Multipurpose, contoured, plastic molded chair with back, armless, industrial production
            Material: Plastic, laminate finish
            Design: Back is pierced or fretted, no cushions, no upholstery
            Height: (of seat) 30-45 cm, (of back) 30-45 cm
            Width: 30-45 cm
            Depth: (of seat) 30-45 cm
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111050','pname' => 'Chair, Standard, BL [1 Piece]','pspecs' => 'Chair, Standard, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Traditional, multipurpose chair with solid back and contoured arms; Cottage production
            Material: Seat
            Design: No cushion
            Height: (of seat) 40-50 cm; (of back) 40-60 cm
            Width: 40-60 cm
            Depth: 40-50 cm
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111060','pname' => 'Cupboard, Almirah Steel, BL [1 Piece]','pspecs' => 'Cupboard, Almirah Steel, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Cupboard, industrial production
            Material: Steel
            Design: 22 gauge door, 24 gauge sides with 2-4 hanging rod
            Height: 1.5-2 m
            Width: 1.0-1.2 m
            Depth: 0.4-0.5 m
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111070','pname' => 'Double bed frame, WKB-L [1 Piece]','pspecs' => 'Double bed frame, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Double bed frame, with headboard, foot board allowed
            Material: Medium density fiberboard (MDF)
            Design: Plain design, simple decorative cuts and profiles allowed
            Width: 140-150 cm
            Length: 200 cm or national standard
            Price excludes: Delivery charge
            Exclude: Solid hardwood beds; mattress; storage box
            Specify: Brand, dimensions'),
            array('pcode' => '1105111080','pname' => 'Mat, Natural Material, BL [1 Piece]','pspecs' => 'Mat, Natural Material, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Mat
            Material: Straw, thread, fabric
            Design: Braided, non-woven, for outdoor
            Height: 200 cm
            Width: 100 cm
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111090','pname' => 'Mattress, foam, single, BNR [1 Piece]','pspecs' => 'Mattress, foam, single, BNR
            Brand: Not relevant
            Preferred quantity: 1 Piece
            Type: Single mattress
            Material: Foam core, standard urethane
            Design: Quilted, cotton mattress cover
            Height: 200 cm
            Width: 100 cm
            Depth: 10 cm
            Price excludes: Delivery charge
            Specify: Brand, if any; dimensions'),
            array('pcode' => '1105111100','pname' => 'Mattress, Jute and Foam, single, BNR [1 Piece]','pspecs' => 'Mattress, Jute and Foam, single, BNR
            Brand: Not relevant
            Preferred quantity: 1 Piece
            Type: Single mattress
            Material: Jute and foam
            Design: With smooth, cotton cover
            Height: 200 cm
            Width: 100 cm
            Depth: 10 cm
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111110','pname' => 'Straight Fluorescent Light Fitting, with bulb, BL [1 Piece]','pspecs' => 'Straight Fluorescent Light Fitting, with bulb, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Ceiling or wall light fitting
            Material: Metal, pressed tin
            Design: Fixture standing off wall, with glass covering and T12 fluorescent tube (40 watts)
            Length: 5 feet
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111120','pname' => 'Straight Fluorescent Light Fitting, without bulb, BL [1 Piece]','pspecs' => 'Straight Fluorescent Light Fitting, without bulb, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Ceiling or wall light fitting
            Material: Metal, pressed tin
            Design: Fixture standing off wall, with glass covering and (without bulb)
            Length: 5 feet
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111130','pname' => 'Table, Coffee/Living Room, Industrial, BL [1 Piece]','pspecs' => 'Table, Coffee/Living Room, Industrial, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Rectangular, multipurpose table; Industrial production
            Material: Top
            Design: Contemporary
            Height: 0.4-0.6 m
            Width: 0.4-0.6 m
            Depth: 0.8-1.2 m
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111140','pname' => 'Table, Dining, WKB-L [1 Piece]','pspecs' => 'Table, Dining, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Kitchen table, without extension
            Material: Top board
            Design: Simple rectangular shape
            Height: 70-80 cm
            Width: 110-140 cm
            Depth: 75-85 cm
            Price excludes: Delivery charge
            Specify: Brand; dimensions'),
            array('pcode' => '1105111150','pname' => 'Table, Traditional Center, BL [1 Piece]','pspecs' => 'Table, Traditional Center, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Coffee or tea table; Cottage production
            Material: Top
            Design: Rectangular shape
            Height: 0.4-0.6 m
            Width: 0.4-0.6 m
            Depth: 0.8-1.2 m
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111160','pname' => 'Table/Desk Lamp, LED, BL [1 Piece]','pspecs' => 'Table/Desk Lamp, LED, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Table lamp
            Material: Iron metal pole and base, molded plastic shade and body
            Design: With LED lamp (approx. 40-60 8watts)
            Height: 30-60 cm
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111180','pname' => 'Wardrobe, WKB-L [1 Piece]','pspecs' => 'Wardrobe, WKB-L
            Brand: Well Known
            Brand Stratum: Low
            Preferred quantity: 1 Piece
            Type: Wardrobe with 2-open (not-sliding) doors, 1 hanging rail, 2 inside drawers
            Material: Pressboard (chipboard), surface
            Design: Plain design, wood impact on surface allowed
            Height: 170 - 200 cm
            Width: 80 - 100 cm
            Depth: 50 - 65 cm
            Price excludes: Delivery charge
            Specify: Brand; dimensions'),
            array('pcode' => '1105111190','pname' => 'Dining table, set with chairs, BNR [1 Set]','pspecs' => 'Dining table, set with chairs, BNR
            Brand: Brand not relevant
            Preferred quantity: 1 Set
            Type: 1 table with 4 chairs
            Material: metal frame; chairs with cushioned seat and back
            Height: 75 cm
            Width: close to 120 cm
            Depth: close to 70 cm
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105111200','pname' => 'Wardrobe, 4-doors, BNR [1 Piece]','pspecs' => 'Wardrobe, 4-doors, BNR
            Brand: Brand not relevant
            Preferred quantity: 1 Piece
            Type: Wardrobe with 4-open (not-sliding) doors, 1 main hanging rail, with or without an additional smalling hanging rail; 4-5 open shelves on one side; and 2-3 shelves on the other side
            Material: made of particle boards
            Height: 200-210 cm
            Width: close to 160 cm
            Depth: close to 52 cm
            Price excludes: Delivery charge
            Specify: Label, if any; dimensions, country'),
            array('pcode' => '1105111210','pname' => 'Single bed frame, WKB-L [1 Piece]','pspecs' => 'Single bed frame, WKB-L
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Single bed frame, with headboard, foot board allowed
            Material: Medium density fiberboard (MDF)
            Design: Plain design, simple decorative cuts and profiles allowed
            Width: 80 - 90 cm (S)
            Length: 200 cm or national standard (S)
            Price excludes: Delivery charge
            Exclude: Solid hardwood beds; mattress; storage box
            Specify: Brand, dimensions
            Notes: New item'),
            array('pcode' => '1105121010','pname' => 'Floor covering, vinyl (PVC), BL [1 Square meter]','pspecs' => 'Floor covering, vinyl (PVC), BL
            Brand: Brandless
            Preferred quantity: 1 Square meter
            Type: Vinyl floor covering
            Material: Vinyl (PVC)
            Design: Any pattern
            Length: 4 m
            Width: 2 m
            Thickness: 0.2-0.3 cm
            Price excludes: Delivery and laying charges
            Specify: Label, if any, dimensions'),
            array('pcode' => '1105121020','pname' => 'Linoleum, BL [1 Square meter]','pspecs' => 'Linoleum, BL
            Brand: Brandless
            Preferred quantity: 1 Square meter
            Type: Linoleum, heat resistant
            Design: Square-shaped
            Length: 1 m
            Width: 1 m
            Thickness: 2.2 cm
            Price excludes: Delivery and laying charges
            Exclude: Hand knotted rugs, rugs with fringes, folded or bind with ribbon
            Specify: Label, if any, dimensions'),
            array('pcode' => '1105121030','pname' => 'Plastic mats, BL [1 Square meter]','pspecs' => 'Plastic mats, BL
            Brand: Brandless
            Preferred quantity: 1 Square meter
            Type: Plastic mat, no padding, not heat resistant
            Material: Plastic
            Design: Square-shaped
            Length: 1 m
            Width: 1 m
            Price excludes: Delivery and laying charges
            Exclude: Hand knotted rugs, rugs with fringes, folded or bind with ribbon
            Specify: Label, if any, dimensions'),
            array('pcode' => '1105121040','pname' => 'Rug, 100% wool, BL [1 Square meter]','pspecs' => 'Rug, 100% wool, BL
            Brand: Brandless
            Preferred quantity: 1 Square meter
            Type: Machine-woven, with solid rubber padding, bound
            Material: 100 % wool face yarn, rubber back and padding
            Design: Rectangular shape, multicolored pattern, multi-level loop
            Length: 2-3 m
            Width: 1-2 m
            Price excludes: Delivery and laying charges
            Exclude: Hand knotted rugs, rugs with fringes, folded or bind with ribbon
            Specify: Label, if any, dimensions'),
            array('pcode' => '1105121050','pname' => 'Rug, synthetic, BL [1 Square meter]','pspecs' => 'Rug, synthetic, BL
            Brand: Brandless
            Preferred quantity: 1 Square meter
            Type: Machine-made, cut pile (plush) rug
            Material: 100 % synthetic material (e.g. viscose)
            Design: Multicolor
            Length: 2 m
            Width: 1.4 m
            Thickness: 2 cm
            Price excludes: Delivery and laying charges
            Exclude: Hand knotted rugs, rugs with fringes, folded or bind with ribbon
            Specify: Label, if any, dimensions'),
            array('pcode' => '1105211010','pname' => 'Bath towel, cotton, large, WKB [1 Piece]','pspecs' => 'Bath towel, cotton, large, WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Bath towel, large, medium thickness
            Material: 100% cotton terry
            Machine washable: Yes
            Design: No pattern, solid color, hemmed sides
            Length: 150cm
            Width: 70cm
            Exclude: Egyptian cotton
            Specify: Brand, dimensions'),
            array('pcode' => '1105211020','pname' => 'Bath towel, cotton, small, BL [1 Piece]','pspecs' => 'Bath towel, cotton, small, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Bath towel, small, medium thickness
            Material: 100% cotton terry
            Machine washable: Yes
            Design: No pattern, solid color, hemmed sides
            Length: 100cm
            Width: 50cm
            Exclude: Egyptian cotton
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105211030','pname' => 'Blanket, cotton/polyester, BL [1 Piece]','pspecs' => 'Blanket, cotton/polyester, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Non-piling, single size, woven, cotton and polyester blanket
            Material: 70% - 80% cotton, nylon binding
            Machine washable: Yes
            Design: Single color
            Length: 210cm
            Width: 140cm
            Specify: Brand, if any, dimensions'),
            array('pcode' => '1105211040','pname' => 'Blanket, mixed fiber, BL [1 Piece]','pspecs' => 'Blanket, mixed fiber, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Non-piling, single size, woven, wool blanket
            Material: 50-80% wool content, nylon binding
            Machine washable: Yes
            Design: Single color
            Length: 210cm
            Width: 140cm
            Specify: Brand, if any, dimensions'),
            array('pcode' => '1105211050','pname' => 'Blanket, wool, BL [1 Piece]','pspecs' => 'Blanket, wool, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Non-piling, single size, woven, wool blanket
            Material: 100% wool, nylon binding
            Machine washable: Yes
            Design: Single color
            Length: 210cm
            Width: 140cm
            Specify: Brand, if any, dimensions'),
            array('pcode' => '1105211060','pname' => 'Cotton/Polyester Curtain, WKB [1 Piece]','pspecs' => 'Cotton/Polyester Curtain, WKB
            Brand: Well known
            Preferred quantity: 1 Piece
            Type: Medium to heavy curtain tab
            Material: Cotton (50% - 80%) and Polyester
            Machine washable: Yes
            Design: Multicolor, Blind stitched side; Blind stitched bottom
            Length: Approx. 200cm
            Width: Approx. 100cm
            Exclude: Egyptian cotton
            Specify: Brand; dimensions'),
            array('pcode' => '1105211070','pname' => 'Flat bottom sheet, cotton, BL [1 Piece]','pspecs' => 'Flat bottom sheet, cotton, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Flat bottom sheet for bed (not fitted)
            Material: Cotton, mixture with less than 20% synthetic material allowed
            Machine washable: Yes
            Design: No pattern, solid color
            Length: 200-240cm
            Width: 90-140cm
            Exclude: Egyptian cotton
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105211080','pname' => 'Flat sheet, 65% Cotton, 35% Polyester, medium thread count, BL [1 Piece]','pspecs' => 'Flat sheet, 65% Cotton, 35% Polyester, medium thread count, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Single size, High quality
            Material: 65% Cotton; 35% Polyester; Thread count is 160-199
            Design: Over-all print on dyed background; Plain hems for flat sheets and pillowcases
            Length: 210 cm
            Width: 140 cm
            Specify: Brand, if any, dimensions'),
            array('pcode' => '1105211090','pname' => 'Mosquito net, BL [1 Piece]','pspecs' => 'Mosquito net, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Mosquito net, single size
            Material: Nylon
            Machine washable: Yes
            Design: Single color
            Length: 200cm
            Width: 100cm
            Specify: Brand, if any, dimensions'),
            array('pcode' => '1105211100','pname' => 'Pillow Polyester Fiberfill, BL [1 Piece]','pspecs' => 'Pillow Polyester Fiberfill, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Standard pillow with polyester fiberfill
            Material: Cotton pillow cover
            Design: Soft support
            Length: 27 inches
            Width: 20 inches
            Specify: Brand, if any, dimensions'),
            array('pcode' => '1105211110','pname' => 'Plain Pillow Case, Cotton Polyester, BL [1 Piece]','pspecs' => 'Plain Pillow Case, Cotton Polyester, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Standard pillow case
            Material: 65% cotton, 35% polyester
            Machine washable: Yes
            Design: Plain hems, Thread count is 120-159
            Length: 68 cm
            Width: 50 cm
            Specify: Brand, if any, dimensions'),
            array('pcode' => '1105211120','pname' => 'Quilt, BL [1 Piece]','pspecs' => 'Quilt, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Single size quilt
            Material: 100% Cotton fabric (face and back), Polyester fiberfill
            Design: Patterned quilting, plain weave
            Length: 210cm
            Width: 140cm
            Specify: Brand, if any, dimensions'),
            array('pcode' => '1105211130','pname' => 'Single bed blanket, polyester, BL [1 Piece]','pspecs' => 'Single bed blanket, polyester, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Blanket, solid/conventional weave
            Material: Synthetic 100%
            Machine washable: Yes
            Design: No pattern, solid color
            Length: 200-240cm
            Width: 120-140cm
            Exclude: Blanket with pilling surface
            Specify: Label, if any; dimensions'),
            array('pcode' => '1105211140','pname' => 'Bedding set, cotton or cotton mix, BL [1 Set]','pspecs' => 'Bedding set, cotton or cotton mix, BL
            Brand: Brandless
            Preferred quantity: 1 Set
            Type: 1 bedsheet; 2 pillow covers; 1 quilt cover
            Material: Cotton, or cotton mix
            Machine washable: Yes
            Design: No pattern, solid color
            Length: 180-200cm
            Width: 120-140cm
            Specify: Brand, if any; country'),
            array('pcode' => '1105211150','pname' => 'Bedding set, cotton or cotton mix, BL [1 Set]','pspecs' => 'Bedding set, cotton or cotton mix, BL
            Brand: Brandless
            Preferred quantity: 1 Set
            Type: 1 bedsheet; 4 pillow covers (including pillow cases, and or bolster cases)
            Material: Cotton, or cotton mix
            Machine washable: Yes
            Design: No pattern, solid color
            Length: 180-200cm
            Width: 120-140cm
            Specify: Brand, if any; country'),
            array('pcode' => '1105311010','pname' => 'Air conditioner, split chassis, other than Panasonic, WKB-M [1 Piece]','pspecs' => 'Air conditioner, split chassis, other than Panasonic, WKB-M
            Brand: Well Known other than Panasonic
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Air conditioner, cooling only, with dehumidifier, split chassis (wall unit)
            Function/control: Electronic with remote control, timer
            Power: 1 horsepower
            Cooling capacity: Approx. 9000 BTUs
            Energy efficiency class: A or A+
            Exclude: Air conditioner with heating function
            Specify: Brand, model'),
            array('pcode' => '1105311020','pname' => 'Air conditioner, split chassis, Panasonic [1 Piece]','pspecs' => 'Air conditioner, split chassis, Panasonic
            Brand: Panasonic
            Preferred quantity: 1 Piece
            Type: Air conditioner, cooling only, with dehumidifier, split chassis (wall unit)
            Function/control: Electronic with remote control, timer
            Power: 1 horsepower
            Cooling capacity: Approx. 9000 BTUs
            Energy efficiency class: A or A+
            Exclude: Air conditioner with heating function
            Specify: Brand, model'),
            array('pcode' => '1105311030','pname' => 'Electric Stove, Freestanding, WKB-M [1 Piece]','pspecs' => 'Electric Stove, Freestanding, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: 4 burners electric stove, with oven
            Function/control: With timer
            Power: Around 230 Volts (60Hz)
            Capacity: Approximately 70 liter oven capacity
            Dimensions: 70 (W) x 60 (D) cm
            Exclude: Convection cooking technology, Gas stoves
            Specify: Brand, model'),
            array('pcode' => '1105311040','pname' => 'Gas Stove, Portable Counter Top Unit, WKB-M [1 Piece]','pspecs' => 'Gas Stove, Portable Counter Top Unit, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Portable gas stove, with 2 burners, no grill
            Power: Automatic lighting method
            Dimensions: Approximately 70 (H) x 40 (W) x 10 (D) cm
            Exclude: Convection cooking technology
            Specify: Brand, model'),
            array('pcode' => '1105311050','pname' => 'Kerosene Stove, BL [1 Piece]','pspecs' => 'Kerosene Stove, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Single burner, kerosene stove, freestanding
            Capacity: Approximately 2 liters of kerosene
            Dimensions: Approximately 30 (H) x 25 (W) x 30 (D) cm
            Exclude: Butane or propane stoves
            Specify: Label, if any'),
            array('pcode' => '1105311060','pname' => 'Microwave oven, WKB-L [1 Piece]','pspecs' => 'Microwave oven, WKB-L
            Brand: Well Known
            Brand stratum: Low
            Preferred quantity: 1 Piece
            Type: Microwave with rotating or carousel tray
            Power: 650 - 850 watts
            Capacity: 16-22 liters
            Doors: One
            Dimensions: Approx. 30 (H) x 45 (W) x 27 (D) cm
            Exclude: Microwave oven with grill or browner
            Specify: Brand, model, capacity'),
            array('pcode' => '1105311070','pname' => 'Sewing Machine, Electric, WKB-M [1 Piece]','pspecs' => 'Sewing Machine, Electric, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Electric sewing machine, Portable
            Function/control: 4-step automatic button hole, extra bright LED sewing light, top load drops in bobbin, bobbin winder; about 14 type of stitches
            Specify: Brand and Model'),
            array('pcode' => '1105311080','pname' => 'Sewing Machine, Mechanical/Manual, WKB-M [1 Piece]','pspecs' => 'Sewing Machine, Mechanical/Manual, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Manual (foot-operated) sewing machine with buttonholer
            Function/control: Uses belt; Type 1 stitch
            Specify: Brand and Model'),
            array('pcode' => '1105311090','pname' => 'Single Door Refrigerator, WKB-L [1 Piece]','pspecs' => 'Single Door Refrigerator, WKB-L
            Brand: Well Known
            Brand stratum: Low
            Preferred quantity: 1 Piece
            Type: One door refrigerator (fridge and freezer are in the same compartment)
            Function/control: Mechanical temperature control
            Capacity: 90-115 liters for the refrigerator; 10 - 20 liters for the freezer
            Energy efficiency class: A or A+
            Doors: One
            Dimensions: Approx. 90 (H) x 60 (W) x 60 (D) cm
            Specify: Brand, model'),
            array('pcode' => '1105311100','pname' => 'Two Door Refrigerator, WKB-L [1 Piece]','pspecs' => 'Two Door Refrigerator, WKB-L
            Brand: Well Known
            Brand stratum: Low
            Preferred quantity: 1 Piece
            Type: Fridge-freezer, low, with freezer top or bottom
            Function/control: Mechanical temperature controls with automatic defrosting for fridge and manual for freezer
            Capacity: 165-190 liters for the refrigerator; 40-50 liters for the freezer
            Energy efficiency class: A or A+
            Doors: Two
            Dimensions: Approx. 145 (H) x 55 (W) x 60 (D) cm
            Specify: Brand, model'),
            array('pcode' => '1105311110','pname' => 'Vacuum cleaner, Panasonic [1 Piece]','pspecs' => 'Vacuum cleaner, Panasonic
            Brand: Panasonic
            Preferred quantity: 1 Piece
            Type: Canister (cylinder) vacuum cleaner, with dust bag, air clean filter HEPA, automatic cord rewind
            Function/control: Mechanical full bag indicator
            Power: Approx. 800 watts
            Specify: Brand, model'),
            array('pcode' => '1105311120','pname' => 'Vacuum cleaner, other than Panasonic, WKB-M [1 Piece]','pspecs' => 'Vacuum cleaner, other than Panasonic, WKB-M
            Brand: Well Known other than Panasonic
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Canister (cylinder) vacuum cleaner, with dust bag, air clean filter HEPA, automatic cord rewind
            Function/control: Mechanical full bag indicator
            Power: Approx. 800 watts
            Specify: Brand, model'),
            array('pcode' => '1105311130','pname' => 'Washing Machine, Full-Automatic, WKB-M [1 Piece]','pspecs' => 'Washing Machine, Full-Automatic, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Fully automatic, top loading, with LCD display
            Function/control: Microprocessor; Wash cycles
            Power: Up to 1200 spins per minute
            Capacity: 5.5-7 Kg (dry clothes)
            Energy efficiency class: A or A+
            Doors: One
            Dimensions: Approximately 90 (H) x 60 (W) x 60 (D) cm
            Exclude: Washing machine with inverter technology
            Specify: Brand, model'),
            array('pcode' => '1105311140','pname' => 'Washing machine, fully automatic, WKB-M [1 Piece]','pspecs' => 'Washing machine, fully automatic, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Front loader washing machine
            Function/control: Electronic, with a simple LED display (2-3 digits)
            Power: Approx. 1400 rpm (revolutions per minute)
            Capacity: Approx. 8 kg (dry)
            Energy efficiency class: A or A+
            Doors: One (front)
            Dimensions: Approx. 85 (H) x 60 (W) x 60 (D) cm
            Exclude: Models with large LCD/LED displays combining text and digits
            Specify: Brand, model'),
            array('pcode' => '1105311150','pname' => 'Washing machine, Semi-automatic, other than Whirlpool, WKB-M [1 Piece]','pspecs' => 'Washing machine, Semi-automatic, other than Whirlpool, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Top loader washing machine
            Function/control: Mechanical program dial
            Power: Approx. 1000 rpm (revolutions per minute)
            Capacity: Approx. 5 kg (dry)
            Energy efficiency class: A or A+
            Doors: One (top)
            Dimensions: Approx. 90 (H) x 60 (W) x 60 (D) cm
            Exclude: Models with large LCD/LED displays combining text and digits
            Specify: Brand, model'),
            array('pcode' => '1105311160','pname' => 'Washing machine, Semi-automatic, Whirlpool [1 Piece]','pspecs' => 'Washing machine, Semi-automatic, Whirlpool
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Top loader washing machine
            Function/control: Mechanical program dial
            Power: Approx. 1000 rpm (revolutions per minute)
            Capacity: Approx. 5 kg (dry)
            Energy efficiency class: A or A+
            Doors: One (top)
            Dimensions: Approx. 90 (H) x 60 (W) x 60 (D) cm
            Exclude: Models with large LCD/LED displays combining text and digits
            Specify: Brand, model'),
            array('pcode' => '1105311170','pname' => 'Four-burner gas stove with oven, WKB-L [1 Piece]','pspecs' => 'Four-burner gas stove with oven, WKB-L
            Brand: Well Known
            Model: (S)
            Brand stratum: Low
            Preferred quantity: 1 Piece
            Type: 4 burners gas stove, with oven
            Function/control: With timer
            Capacity: Oven capacity approx. 70 liters
            Dimensions: Approx. 70 (W) x 60 (D) cm
            Exclude: Electric stoves
            Specify: Brand, model
            Notes: New item'),
            array('pcode' => '1105321010','pname' => 'Blender, other than Panasonic and Philips, WKB-M [1 Piece]','pspecs' => 'Blender, other than Panasonic and Philips, WKB-M
            Brand: Well known other than Panasonic and Philips
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Regular sized blender
            Material: Plastic jar and stainless steel blade
            Function/control: 3 speeds including pulse
            Power: close to 250 watts
            Exclude: Mini-blender, Immersion blender
            Specify: Brand and Model'),
            array('pcode' => '1105321020','pname' => 'Blender, Panasonic [1 Piece]','pspecs' => 'Blender, Panasonic
            Brand: Panasonic
            Preferred quantity: 1 Piece
            Type: Regular sized blender
            Material: Plastic jar and stainless steel blade
            Function/control: 3 speeds including pulse
            Power: close to 250 watts
            Exclude: Mini-blender, Immersion blender
            Specify: Model'),
            array('pcode' => '1105321030','pname' => 'Blender, Philips [1 Piece]','pspecs' => 'Blender, Philips
            Brand: Philips
            Preferred quantity: 1 Piece
            Type: Regular sized blender
            Material: Plastic jar and stainless steel blade
            Function/control: 3 speeds including pulse
            Power: close to 250 watts
            Exclude: Mini-blender, Immersion blender
            Specify: Model'),
            array('pcode' => '1105321040','pname' => 'Ceiling fan, WKB-M [1 Piece]','pspecs' => 'Ceiling fan, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Ceiling fan
            Material: Metal
            Function/control: No oscillation, fan speeds
            Dimensions: Diameter (propeller)
            Exclude: Chandeliers
            Specify: Brand, model'),
            array('pcode' => '1105321050','pname' => 'Dry iron, other than Panasonic and Philips, WKB-M [1 Piece]','pspecs' => 'Dry iron, other than Panasonic and Philips, WKB-M
            Brand: Well known other than Panasonic and Philips
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Corded dry iron, adjustable temperature
            Material: Plastic
            Power: Approximately 800-1200 watts
            Dimensions: Approximately 20 (H) x 20 (W) x 30 (D) cm
            Exclude: Models with sapphire or ceramic soleplate; models with station; models with steam
            Specify: Brand, model, observed watts'),
            array('pcode' => '1105321060','pname' => 'Dry iron, Panasonic [1 Piece]','pspecs' => 'Dry iron, Panasonic
            Brand: Panasonic
            Preferred quantity: 1 Piece
            Type: Corded dry iron, adjustable temperature
            Material: Plastic
            Power: 800-1000 watts
            Dimensions: Approximately 20 (H) x 20 (W) x 30 (D) cm
            Exclude: Models with sapphire or ceramic soleplate; models with station; models with steam
            Specify: Model'),
            array('pcode' => '1105321070','pname' => 'Dry iron, Philips [1 Piece]','pspecs' => 'Dry iron, Philips
            Brand: Philips
            Preferred quantity: 1 Piece
            Type: Corded dry iron, adjustable temperature
            Material: Plastic
            Power: Approximately 800-1200 watts
            Dimensions: Approximately 20 (H) x 20 (W) x 30 (D) cm
            Exclude: Models with sapphire or ceramic soleplate; models with station; models with steam
            Specify: Model, observed watts'),
            array('pcode' => '1105321080','pname' => 'Electric kettle, steel, other than Philips, WKB-M [1 Piece]','pspecs' => 'Electric kettle, steel, other than Philips, WKB-M
            Brand: Well Known - Medium other than Philips
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Electric kettle with non-detachable cord
            Material: Stainless steel
            Function/control: Without heat controls
            Power: 1300-1700 watts
            Capacity: 1.5-1.7 liters
            Dimensions: Diameter
            Specify: Brand, model'),
            array('pcode' => '1105321090','pname' => 'Electric kettle, steel, Philips [1 Piece]','pspecs' => 'Electric kettle, steel, Philips
            Brand: Philips
            Preferred quantity: 1 Piece
            Type: Electric kettle with non-detachable cord
            Material: Stainless steel
            Function/control: Without heat controls
            Power: 1300-1700 watts
            Capacity: 1.5-1.7 liters
            Dimensions: Diameter
            Specify: Model'),
            array('pcode' => '1105321100','pname' => 'Hand Electric Mixer, WKB-M [1 Piece]','pspecs' => 'Hand Electric Mixer, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Portable hand mixer
            Material: ABS plastic and stainless steel
            Function/control: With detachable, stainless steel mixing bowl;1; Beater eject button; Dough hook; 3-7 mixing speeds
            Power: close to 250 watts
            Specify: Brand and Model'),
            array('pcode' => '1105321110','pname' => 'Pedestal fan, WKB-M [1 Piece]','pspecs' => 'Pedestal fan, WKB-M
            Brand: Well Known - Medium
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Pedestal fan
            Material: Fan material
            Function/control: Oscillation (moves forth and back) , fan speeds
            Dimensions: Diameter (propeller)
            Specify: Brand, model'),
            array('pcode' => '1105321120','pname' => 'Rice Cooker, Basic, other than Panasonic, WKB-M [1 Piece]','pspecs' => 'Rice Cooker, Basic, other than Panasonic, WKB-M
            Brand: Well known other than Panasonic
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Material: Pot
            Function/control: Cook and keep warm setting, Indicator light or ready signal
            Power: close to 800 watts, with detachable cord
            Capacity: 1.8 Liter (or 10 cups of raw rice)
            Specify: Brand and Model'),
            array('pcode' => '1105321130','pname' => 'Rice Cooker, Basic, Panasonic [1 Piece]','pspecs' => 'Rice Cooker, Basic, Panasonic
            Brand: Panasonic
            Preferred quantity: 1 Piece
            Material: Pot
            Function/control: Cook and keep warm setting, Indicator light or ready signal
            Power: close to 800 watts, with detachable cord
            Capacity: 1.8 Liter (or 10 cups of raw rice)
            Specify: Model'),
            array('pcode' => '1105321140','pname' => 'Rice Cooker, Digital, WKB-M [1 Piece]','pspecs' => 'Rice Cooker, Digital, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Digital rice cooker
            Material: Pot
            Function/control: Timer, Keep warm setting, Indicator light or ready signal, Infinite heat selection
            Power: close to 800 watts, with detachable cord
            Capacity: 1 (or 5 cups of raw rice)
            Specify: Brand and Model'),
            array('pcode' => '1105321150','pname' => 'Steam and Dry iron, other than Panasonic and Philips, WKB-M [1 Piece]','pspecs' => 'Steam and Dry iron, other than Panasonic and Philips, WKB-M
            Brand: Well known other than Panasonic and Philips
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Adjustable Steam and Dry Settings; Molded Plastic Handle; Built-In water tank; 360º Rotating Cord; Fixed Dial w/ Rotating Indicator Temperature Control; 5 Fabric Settings; close to 7oz Water Tank Capacity
            Material: Curved, Non-Stick Titanium-Finish (Sole plate)
            Power: approx 1500 - 2400 watts
            Dimensions: Approximately 20 (H) x 20 (W) x 30 (D) cm
            Exclude: Models with sapphire or ceramic soleplate; models with station
            Specify: Brand and model'),
            array('pcode' => '1105321160','pname' => 'Steam and Dry iron, Panasonic [1 Piece]','pspecs' => 'Steam and Dry iron, Panasonic
            Brand: Panasonic
            Preferred quantity: 1 Piece
            Type: Adjustable Steam and Dry Settings; Molded Plastic Handle; Built-In water tank; 360º Rotating Cord; Fixed Dial w/ Rotating Indicator Temperature Control; 5 Fabric Settings; close to 7oz Water Tank Capacity
            Material: Curved, Non-Stick Titanium-Finish (Sole plate)
            Power: close to 1500 watts
            Dimensions: Approximately 20 (H) x 20 (W) x 30 (D) cm
            Exclude: Models with sapphire or ceramic soleplate; models with station
            Specify: Model'),
            array('pcode' => '1105321170','pname' => 'Steam and Dry iron, Philips [1 Piece]','pspecs' => 'Steam and Dry iron, Philips
            Brand: Philips
            Preferred quantity: 1 Piece
            Type: Adjustable Steam and Dry Settings; Molded Plastic Handle; Built-In water tank; 360º Rotating Cord; Fixed Dial w/ Rotating Indicator Temperature Control; 5 Fabric Settings; close to 7oz Water Tank Capacity
            Material: Curved, Non-Stick Titanium-Finish (Sole plate)
            Power: approx 1500 - 2400 watts
            Dimensions: Approximately 20 (H) x 20 (W) x 30 (D) cm
            Exclude: Models with sapphire or ceramic soleplate; models with station
            Specify: Model'),
            array('pcode' => '1105321180','pname' => 'Steam iron, Panasonic [1 Piece]','pspecs' => 'Steam iron, Panasonic
            Brand: Panasonic
            Preferred quantity: 1 Piece
            Type: Corded steam iron, adjustable temperature
            Material: Plastic
            Function/control: Water spray, vertical steam
            Power: 2000-2400 watts
            Dimensions: Approximately 23 (H) x 20 (W) x 30 (D) cm
            Exclude: Models with sapphire or ceramic soleplate; models with station
            Specify: Model'),
            array('pcode' => '1105321190','pname' => 'Steam iron, Philips [1 Piece]','pspecs' => 'Steam iron, Philips
            Brand: Philips
            Preferred quantity: 1 Piece
            Type: Corded steam iron, adjustable temperature
            Material: Plastic
            Function/control: Water spray, vertical steam
            Power: 2000-2400 watts
            Dimensions: Approximately 23 (H) x 20 (W) x 30 (D) cm
            Exclude: Models with sapphire or ceramic soleplate; models with station
            Specify: Model'),
            array('pcode' => '1105321200','pname' => 'Steam iron, other than Panasonic and Philips, WKB-M [1 Piece]','pspecs' => 'Steam iron, other than Panasonic and Philips, WKB-M
            Brand: Well Known other than Panasonic and Philips
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Corded steam iron, adjustable temperature
            Material: Plastic
            Function/control: Water spray, vertical steam
            Power: 2000-2400 watts
            Dimensions: Approximately 23 (H) x 20 (W) x 30 (D) cm
            Exclude: Models with sapphire or ceramic soleplate; models with station
            Specify: Brand, model'),
            array('pcode' => '1105321210','pname' => 'Table fan, Panasonic [1 Piece]','pspecs' => 'Table fan, Panasonic
            Brand: Panasonic
            Preferred quantity: 1 Piece
            Type: Table/desk fan
            Material: Fan material
            Function/control: Oscillation (moves forth and back) , fan speeds
            Dimensions: Diameter (propeller)
            Specify: Model'),
            array('pcode' => '1105321220','pname' => 'Table fan, WKB-L [1 Piece]','pspecs' => 'Table fan, WKB-L
            Brand: Well Known
            Brand stratum: Low
            Preferred quantity: 1 Piece
            Type: Table/desk fan
            Material: Fan material
            Function/control: Oscillation (moves forth and back) , fan speeds
            Dimensions: Diameter (propeller)
            Specify: Brand, model'),
            array('pcode' => '1105321230','pname' => 'Toaster, other than Philips, WKB-M [1 Piece]','pspecs' => 'Toaster, other than Philips, WKB-M
            Brand: Well known other than Philips
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: 2-slice capacity, Light and dark setting only with manual lowering control and pull-out crumb tray
            Power: close to 800 watts
            Specify: Brand and model'),
            array('pcode' => '1105321240','pname' => 'Toaster, Philips [1 Piece]','pspecs' => 'Toaster, Philips
            Brand: Philips
            Preferred quantity: 1 Piece
            Type: 2-slice capacity, Light and dark setting only with manual lowering control and pull-out crumb tray
            Power: close to 800 watts
            Specify: Model'),
            array('pcode' => '1105321250','pname' => 'Blender, other than Panasonic and Philips, WKB-M [1 Piece]','pspecs' => 'Blender, other than Panasonic and Philips, WKB-M
            Brand: Well known other than Panasonic and Philips
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Regular sized blender
            Material: Plastic jar and stainless steel blade
            Function/control: 3 speeds including pulse
            Power: close to 500-650 watts
            Exclude: Mini-blender, Immersion blender
            Specify: Brand and Model'),
            array('pcode' => '1105321260','pname' => 'Blender, 2 piece (blender, with small grinder), WKB [1 Set]','pspecs' => 'Blender, 2 piece (blender, with small grinder), WKB
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Regular sized blender, 2 piece set (1 blender, 1 grinder)
            Material: Plastic jar and stainless steel blade
            Function/control: 3 speeds including pulse
            Power: close to 600-800 watts
            Specify: Brand and Model, country'),
            array('pcode' => '1105411010','pname' => 'Bucket, plastic, BL [1 Piece]','pspecs' => 'Bucket, plastic, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Plastic bucket, with handle
            Capacity: 10 liters
            Dominant material: Plastic
            Handle material: Plastic
            Dimension: Diameter 30 cm; height 25 cm
            Specify: Label, if any'),
            array('pcode' => '1105411020','pname' => 'Cooking pot, stainless steel, WKB-L [1 Piece]','pspecs' => 'Cooking pot, stainless steel, WKB-L
            Brand: Well Known
            Brand stratum: Low
            Preferred quantity: 1 Piece
            Type: Two handle cooking pot with a lid, multi-layer reinforced heavy bottom
            Capacity: 3-3.5 liters
            Dominant material: Stainless steel 18/10 (chrome-nickel)
            Handle material: Stainless steel
            Dimension: Diameter 20 cm; height 10-12 cm; bottom thickness 6 mm
            Packaging: Sold individually
            Specify: Brand, capacity'),
            array('pcode' => '1105411030','pname' => 'Frying pan, BL [1 Piece]','pspecs' => 'Frying pan, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Dominant material: Stainless steel
            Handle material: Plastic/bakelite
            Dimension: 25-35 cm in diameter
            Specify: Label, if any'),
            array('pcode' => '1105411040','pname' => 'Frying pan, Tefal original [1 Piece]','pspecs' => 'Frying pan, Tefal original
            Brand: Tefal (original brand)
            Preferred quantity: 1 Piece
            Dominant material: Stainless steel
            Handle material: Bakelite ergonomic with metallic insert
            Dimension: 24 cm in diameter'),
            array('pcode' => '1105411050','pname' => 'Large kitchen knife, BL [1 Piece]','pspecs' => 'Large kitchen knife, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Shape/design: Forged; straight; blade goes all the way through handle
            Dominant material: Stainless steel
            Handle material: Wood or plastic
            Dimension: Blade
            Specify: Label, if any'),
            array('pcode' => '1105411060','pname' => 'Medium sized pot, BL [1 Set]','pspecs' => 'Medium sized pot, BL
            Brand: Brandless
            Preferred quantity: 1 Set
            Capacity: 3 liters
            Dominant material: Stainless steel
            Handle material: Plastic
            Dimension: 24 cm in diameter
            Specify: Label, if any'),
            array('pcode' => '1105411070','pname' => 'Cooking pot, stainless steel, TEFAL [1 Piece]','pspecs' => 'Cooking pot, stainless steel, TEFAL
            Brand: Tefal (original brand)
            Preferred quantity: 1 Piece
            Type: Two handle cooking pot with a lid, multi-layer reinforced heavy bottom
            Capacity: 3-4 liters
            Dominant material: Stainless steel 18/10 (chrome-nickel)
            Handle material: Stainless steel
            Dimension: Diameter 20 cm; height 10-12 cm; bottom thickness 6 mm
            Packaging: Sold individually
            Specify: Capacity'),
            array('pcode' => '1105411080','pname' => 'Plastic bottle and nipple / Feeding bottle, BL [1 Piece]','pspecs' => 'Plastic bottle and nipple / Feeding bottle, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Shape/design: Plain
            Capacity: 200-250 ml
            Specify: Label (if any), capacity'),
            array('pcode' => '1105411090','pname' => 'Plate, ceramic, BL [1 Piece]','pspecs' => 'Plate, ceramic, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Shape/design: Standard, round
            Dimension: 20-25 cm in diameter
            Specify: Label, if any'),
            array('pcode' => '1105411100','pname' => 'Plate, chinaware, BL [1 Piece]','pspecs' => 'Plate, chinaware, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Shape/design: Standard, round
            Dominant material: Fine bone china
            Dimension: 20-25 cm in diameter
            Specify: Label, if any'),
            array('pcode' => '1105411110','pname' => 'Plate, plastic, BL [1 Piece]','pspecs' => 'Plate, plastic, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Shape/design: Standard, round
            Dimension: 20-25 cm in diameter
            Specify: Label, if any'),
            array('pcode' => '1105411120','pname' => 'Plate, steel, BL [1 Piece]','pspecs' => 'Plate, steel, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Shape/design: Standard, round
            Dominant material: Stainless
            Dimension: 20-25 cm in diameter
            Specify: Label, if any'),
            array('pcode' => '1105411130','pname' => 'Pressure cooker, stainless steel, WKB-M [1 Piece]','pspecs' => 'Pressure cooker, stainless steel, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Two handles pressure cooker with a lid
            Capacity: 6.5 liters
            Dominant material: Stainless steel 18/10 (chrome-nickel)
            Handle material: Plastic
            Dimension: Diameter 22 cm; height 20-25 cm
            Packaging: Sold individually
            Exclude: Electric pressure cookers
            Specify: Brand'),
            array('pcode' => '1105411140','pname' => 'Rolling pin, wood, BL [1 Piece]','pspecs' => 'Rolling pin, wood, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Rolling pin, with handles, rolling center
            Dominant material: Wood
            Dimension: Length 40 cm
            Exclude: Rolling pins with ball bearings
            Specify: Label, if any'),
            array('pcode' => '1105411150','pname' => 'Single drinking glass, Luminarc [1 Piece]','pspecs' => 'Single drinking glass, Luminarc
            Brand: Luminarc
            Preferred quantity: 1 Piece
            Capacity: 200 ml
            Dominant material: Clear glass'),
            array('pcode' => '1105411160','pname' => 'Small kitchen knife, BL [1 Piece]','pspecs' => 'Small kitchen knife, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Shape/design: Straight; blade goes halfway through handle
            Dominant material: Stainless steel
            Handle material: Plastic
            Dimension: Blade
            Specify: Label, if any'),
            array('pcode' => '1105411170','pname' => 'Water glass, 3 to 6 pieces, BL [1 Piece]','pspecs' => 'Water glass, 3 to 6 pieces, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Machine made water glass
            Shape/design: With or without simple pattern
            Capacity: 200-330 ml
            Dominant material: Plain cast glass
            Packaging: Multipack, 3 to 6 pieces
            Specify: Label, if any; capacity; number of water glasses in the pack'),
            array('pcode' => '1105411180','pname' => 'Frying pan, other than Tefal, WKB [1 Piece]','pspecs' => 'Frying pan, other than Tefal, WKB
            Brand: Well known other than Tefal
            Preferred quantity: 1 Piece
            Type: non-stick frying pan, with long handle
            Dominant material: Stainless steel
            Handle material: Plastic
            Dimension: 20-26 cm
            Specify: Brand, country'),
            array('pcode' => '1105411190','pname' => 'Medium sized pot, WKB, other than Tefal [1 Piece]','pspecs' => 'Medium sized pot, WKB, other than Tefal
            Brand: Well known
            Preferred quantity: 1 Piece
            Type: non-stick pot with lid, and 2 looped handles
            Capacity: 3 liters
            Dominant material: Stainless steel
            Handle material: metal and/or some plastic
            Dimension: 20-26 cm
            Specify: Brand, country'),
            array('pcode' => '1105411200','pname' => 'Plate, porcelain, WKB [1 Piece]','pspecs' => 'Plate, porcelain, WKB
            Brand: Well known
            Preferred quantity: 1 Piece
            Type: plain white or with simple print
            Shape/design: Standard, round
            Dominant material: Porcelain
            Dimension: 23-27 cm
            Specify: Brand, country (if available)'),
            array('pcode' => '1105411210','pname' => 'Cooking pot, aluminum, BL [1 Piece]','pspecs' => 'Cooking pot, aluminum, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Two handle cooking pot with a lid, multi-layer reinforced heavy bottom
            Capacity: 3-4 liters (S)
            Dominant material: Aluminum
            Handle material: Aluminum
            Dimension: Diameter 20 cm; height 10-12 cm; bottom thickness 6 mm
            Packaging: Sold individually
            Specify: Label if any, capacity
            Notes: New item'),
            array('pcode' => '1105511010','pname' => 'Electric drill driver, cordless, WKB-M [1 Piece]','pspecs' => 'Electric drill driver, cordless, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Cordless electric drill with rechargeable and detachable lithium-ion battery
            Function: Auto-lock chuck
            Power: 18 V (electric tension)
            Speed: 2 speeds
            Exclude: Packages with no battery, with 2 batteries
            Specify: Brand, model'),
            array('pcode' => '1105511020','pname' => 'Electric impact driver, corded, WKB-M [1 Piece]','pspecs' => 'Electric impact driver, corded, WKB-M
            Brand: Well Known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Impact drill driver, corded, 1/2" inch drive
            Function: Variable Speed
            Power: Approx. 3 Amp and 220V (700 watts) or 7 Amp and 110V (700 watts)
            Speed: max. 2800/3200 rotations per minute
            Specify: Brand, model'),
            array('pcode' => '1105521010','pname' => 'AA alkaline batteries, DURACELL [2 Piece]','pspecs' => 'AA alkaline batteries, DURACELL
            Brand: Duracell
            Preferred quantity: 2
            Quantity range: 2 - 8 Piece
            Type: AA size alkaline batteries
            Shape: Cylindrical
            Size: AA size
            Packaging: Package of 2-8 batteries
            Exclude: Other multiple carton
            Specify: Brand'),
            array('pcode' => '1105521020','pname' => 'Battery, dry cell, WKB [1 Pack]','pspecs' => 'Battery, dry cell, WKB
            Brand: Well known such as Eveready, Panasonic
            Preferred quantity: 1
            Quantity range: 1 Pack
            Type: Drycell
            Power: 1.5 V
            Size: D
            Packaging: 2 pieces per pack
            Specify: Brand'),
            array('pcode' => '1105521030','pname' => 'Fluorescent tube, straight, 40 W, WKB [1 Piece]','pspecs' => 'Fluorescent tube, straight, 40 W, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Fluorescent, straight tube, white
            Power: 40 W
            Shape: Straight tube
            Size: Length 80-120 cm
            Packaging: Sold individually
            Specify: Brand, length'),
            array('pcode' => '1105521040','pname' => 'Hammer, BL [1 Piece]','pspecs' => 'Hammer, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Curved claw
            Material: Steel; grade not available
            Size: Total length of tool (including handle)'),
            array('pcode' => '1105521050','pname' => 'Light bulb, CFL, WKB [1 Piece]','pspecs' => 'Light bulb, CFL, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 - 2 Piece
            Type: Compact fluorescent light (CFL) light bulb, E26 or E27
            Power: 800 to 1100 lumen (12W to 20W equivalent)
            Shape: White, round shape or stick
            Size: Diameter 6 cm; length 10 cm
            Packaging: Package of 1-2 light bulbs
            Specify: Brand'),
            array('pcode' => '1105521060','pname' => 'Light bulb, LED, WKB [1 Piece]','pspecs' => 'Light bulb, LED, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 - 2 Piece
            Type: Light-emitting diode (LED) light bulb, E26 or E27
            Power: 800 to 1100 lumen (10W to 18W equivalent)
            Shape: White, round shape bulb
            Size: Diameter 6 cm; length 10 cm
            Packaging: Package of 1-2 light bulbs
            Specify: Brand'),
            array('pcode' => '1105521070','pname' => 'Screwdriver, WKB [1 Piece]','pspecs' => 'Screwdriver, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Flat or cross head screwdriver
            Material: Blade
            Shape: Rubber covered plastic handle
            Size: Length of blade 10 cm; width of tip 5-6 mm
            Packaging: Sold individually
            Exclude: Multiple set package, precision screwdrivers, professional models
            Specify: Brand'),
            array('pcode' => '1105521080','pname' => 'Thin rope, BL [10 Meter]','pspecs' => 'Thin rope, BL
            Brand: Brandless
            Preferred quantity: 10
            Quantity range: 10 Meter
            Material: Nylon
            Size: Length; 10 m; diameter'),
            array('pcode' => '1105611010','pname' => 'Aluminum foil, WKB [1 Roll]','pspecs' => 'Aluminum foil, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Roll
            Type: Aluminum foil
            Packaging: Carton box with easy cut device on one side, 28-30 m per roll
            Dimensions: approx 30 cm width
            Specify: Brand'),
            array('pcode' => '1105611020','pname' => 'Dishwashing detergent, WKB [1000 Milliliter]','pspecs' => 'Dishwashing detergent, WKB
            Brand: Well Known
            Preferred quantity: 1000
            Quantity range: 800 - 1200 Milliliter
            Type: Dishwashing detergent for sink, concentrated
            Form: Liquid
            Packaging: Plastic bottle
            Exclude: Special products for sensitive skin
            Specify: Brand'),
            array('pcode' => '1105611030','pname' => 'Hand sewing needle, WKB [1 Pack]','pspecs' => 'Hand sewing needle, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Pack
            Packaging: Plastic/Paper pack, 10-12 pieces
            Specify: Brand'),
            array('pcode' => '1105611040','pname' => 'Household candles, box, BL [10 Piece]','pspecs' => 'Household candles, box, BL
            Brand: Brandless
            Preferred quantity: 10
            Quantity range: 8 - 12 Piece
            Type: White/natural household candles (paraffin wax)
            Packaging: Pack of 8-12
            Dimensions: Diameter 2 cm; length 15 cm
            Exclude: Scented candles, aroma candles, candles with plants/flowers inside, decorative candles
            Specify: Label, if any'),
            array('pcode' => '1105611050','pname' => 'Insecticide spray, WKB [400 Milliliter]','pspecs' => 'Insecticide spray, WKB
            Brand: Well Known
            Preferred quantity: 400
            Quantity range: 300 - 500 Milliliter
            Type: Insecticide spray against ants, wasps, mosquitoes and other bugs
            Form: Liquid, aerosol
            Packaging: Spray dispenser
            Exclude: Instant-kill type spray
            Specify: Brand'),
            array('pcode' => '1105611060','pname' => 'Kitchen paper roll, BL [2 Roll]','pspecs' => 'Kitchen paper roll, BL
            Brand: Well Known
            Preferred quantity: 2
            Quantity range: 2 - 6 Roll
            Type: White kitchen paper roll, without pattern, not reusable
            Packaging: Pack of 2 to 6 rolls, 120-160 sheets per roll
            Dimensions: 23 x 23 cm
            Specify: Label, if any'),
            array('pcode' => '1105611070','pname' => 'Laundry detergent powder, hand wash, WKB [500 Gram]','pspecs' => 'Laundry detergent powder, hand wash, WKB
            Brand: Well Known
            Preferred quantity: 500
            Quantity range: 350 - 750 Gram
            Type: Laundry detergent powder, for hand wash
            Form: Granulated powder
            Packaging: Plastic or carton container
            Specify: Brand'),
            array('pcode' => '1105611080','pname' => 'Laundry detergent powder, washing machine, WKB [1 Kilogram]','pspecs' => 'Laundry detergent powder, washing machine, WKB
            Brand: Well Known
            Preferred quantity: 1.0
            Quantity range: 0.80 - 1.20 Kilogram
            Type: Laundry detergent powder, for automatic washing machines
            Form: Powder
            Packaging: Plastic or carton container
            Exclude: Special products for sensitive skin and color preservation
            Specify: Brand'),
            array('pcode' => '1105611090','pname' => 'Laundry Soap/Bar, BL [100 Gram]','pspecs' => 'Laundry Soap/Bar, BL
            Brand: Brandless
            Preferred quantity: 100
            Quantity range: 80 - 150 Gram
            Type: Laundry soap
            Form: Solid. tablet
            Packaging: Wrapped'),
            array('pcode' => '1105611100','pname' => 'Mosquito Coils, BL [1 Box]','pspecs' => 'Mosquito Coils, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 1 Box
            Type: Mosquito Coils; packed
            Packaging: Box - 10 coils (5 interlocked coils)'),
            array('pcode' => '1105611110','pname' => 'Nails, BNR [100 Gram]','pspecs' => 'Nails, BNR
            Brand: Not relevant
            Preferred quantity: 100
            Quantity range: 100 Gram
            Type: Common
            Form: Cake
            Packaging: Loose
            Dimensions: Length
            Specify: Brand'),
            array('pcode' => '1105611120','pname' => 'Natural Fiber Broom, BL [1 Piece]','pspecs' => 'Natural Fiber Broom, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Indoor house broom
            Dimensions: Length of bristles'),
            array('pcode' => '1105611130','pname' => 'Shoe polish, WKB [40 Gram]','pspecs' => 'Shoe polish, WKB
            Brand: Well known such as Kiwi, Cherry Blossom
            Preferred quantity: 40
            Quantity range: 30 - 45 Gram
            Form: Cake
            Packaging: Metal can
            Specify: Brand'),
            array('pcode' => '1105611140','pname' => 'Toilet Tissue, WKB [1 Pack]','pspecs' => 'Toilet Tissue, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Pack
            Packaging: Pack, 9-12 pieces
            Dimensions: size 10 cm - 11 cm; 320 per roll; 2 ply
            Specify: Brand'),
            array('pcode' => '1105611150','pname' => 'Air freshner, WKB [300 Milliliter]','pspecs' => 'Air freshner, WKB
            Brand: Well Known
            Preferred quantity: 300
            Quantity range: 200 - 500 Milliliter
            Type: Spray
            Form: Liquid, aerosol
            Packaging: Spray dispenser
            Exclude: Gel or candle types
            Specify: Brand and observed quantity'),
            array('pcode' => '1105611160','pname' => 'All-purposes household cleaner, BL [500 Milliliter]','pspecs' => 'All-purposes household cleaner, BL
            Brand: Brandless
            Preferred quantity: 500
            Quantity range: 500 -2000 Milliliter
            Type: All-purposes household cleaner
            Form: Liquid
            Packaging: Plastic bottle with dispenser
            Exclude: Spray bottles, refill packages
            Specify: Label, if any
            Notes: New item'),
            array('pcode' => '1105621010','pname' => 'Domestic housekeeper, part-time [1 Hour]','pspecs' => 'Domestic housekeeper, part-time
            Preferred quantity: 1 Hour
            Service: Mainly house cleaning, laundry and dishwashing
            Registered service: No
            Time: Weekday during office hours
            Working days per week: 1-3 days, 3-4 hours per day
            Price excludes: Meals'),
            array('pcode' => '1105621020','pname' => 'Domestic housekeeper, full-time [1 Month]','pspecs' => 'Domestic housekeeper, full-time
            Preferred quantity: 1 Month
            Service: House cleaning, laundry, dishwashing and cooking
            Registered service: Yes
            Time: Full-time, stay-in'),
            array('pcode' => '1105621030','pname' => 'Domestic housekeeper, not-registered, full-time [1 Month]','pspecs' => 'Domestic housekeeper, not-registered, full-time
            Preferred quantity: 1 Month
            Service: House cleaning, laundry, dishwashing and cooking
            Registered service: No
            Time: Full-time, stay-in
            Notes: New item'),
            array('pcode' => '1105622010','pname' => 'Laundry, price per kilogram [1 Kilogram]','pspecs' => 'Laundry, price per kilogram
            Preferred quantity: 1 Kilogram
            Service: Washing and pressing (delivery not included)
            Charge: Per weight of laundry
            Material: Cotton blanket
            Exclude: Express service, self-service'),
            array('pcode' => '1105622020','pname' => 'Laundry, price per piece [1 Piece]','pspecs' => 'Laundry, price per piece
            Preferred quantity: 1 Piece
            Service: Washing and pressing (delivery not included)
            Charge: Per weight of laundry
            Material: Cotton blanket
            Exclude: Express service, self-service'),
            array('pcode' => '1105622030','pname' => 'Laundry, self-service [1 Washing cycle]','pspecs' => 'Laundry, self-service
            Preferred quantity: 1 Washing cycle
            Service: Self-service washing, use of washing machine in a launderette/laundromat
            Charge: Standard wash program, 1 cycle
            Price excludes: Price of washing detergents and softener; drying'),
            array('pcode' => '1106111011','pname' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Generic-National brand [20 Tablet/Capsule]','pspecs' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Acetaminophen/Paracetamol
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Analgesic (i.e. pain reliever) and anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111012','pname' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Generic-Regional brand [20 Tablet/Capsule]','pspecs' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Acetaminophen/Paracetamol
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Analgesic (i.e. pain reliever) and anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111021','pname' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator- Calpol (GlaxoSmithKline) [20 Tablet/Capsule]','pspecs' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator- Calpol (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Acetaminophen/Paracetamol
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Calpol
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Analgesic (i.e. pain reliever) and anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111022','pname' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator-Crocin (Solvay Pharma) [20 Tablet/Capsule]','pspecs' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator-Crocin (Solvay Pharma)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Acetaminophen/Paracetamol
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Crocin
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Analgesic (i.e. pain reliever) and anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111023','pname' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator-Panadol (GlaxoSmithKline) [20 Tablet/Capsule]','pspecs' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator-Panadol (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Acetaminophen/Paracetamol
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Panadol
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Analgesic (i.e. pain reliever) and anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111024','pname' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator-Panodil (GlaxoSmithKline) [20 Tablet/Capsule]','pspecs' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator-Panodil (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Acetaminophen/Paracetamol
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Panodil
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Analgesic (i.e. pain reliever) and anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111025','pname' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator-Other brand [20 Tablet/Capsule]','pspecs' => 'Acetaminophen/Paracetamol, 500 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Acetaminophen/Paracetamol
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Analgesic (i.e. pain reliever) and anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111031','pname' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Acetylsalicylic acid
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111032','pname' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Acetylsalicylic acid
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111041','pname' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Alka-Seltzer (Bayer) [30 Tablet/Capsule]','pspecs' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Alka-Seltzer (Bayer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Acetylsalicylic acid
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Alka-Seltzer
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111042','pname' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Aspirin (Bayer) [30 Tablet/Capsule]','pspecs' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Aspirin (Bayer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Acetylsalicylic acid
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Aspirin
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111043','pname' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Cortal (GlaxoSmithKline) [30 Tablet/Capsule]','pspecs' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Cortal (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Acetylsalicylic acid
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Cortal
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111044','pname' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Ecotrin (GlaxoSmithKline) [30 Tablet/Capsule]','pspecs' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Ecotrin (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Acetylsalicylic acid
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Ecotrin
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111045','pname' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Acetylsalicylic acid, 500 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Acetylsalicylic acid
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111051','pname' => 'Aciclovir/Acyclovir, 200 mg, Tablet/Capsule, Generic-National brand [25 Tablet/Capsule]','pspecs' => 'Aciclovir/Acyclovir, 200 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 25 Tablet/Capsule
            Active substance(s): Aciclovir/Acyclovir
            Type of license: Generic
            Strength: 200 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 25 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antiviral
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111052','pname' => 'Aciclovir/Acyclovir, 200 mg, Tablet/Capsule, Generic-Regional brand [25 Tablet/Capsule]','pspecs' => 'Aciclovir/Acyclovir, 200 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 25 Tablet/Capsule
            Active substance(s): Aciclovir/Acyclovir
            Type of license: Generic
            Strength: 200 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 25 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antiviral
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111061','pname' => 'Aciclovir/Acyclovir, 200 mg, Tablet/Capsule, Originator-Zovirax (GlaxoSmithKline) [25 Tablet/Capsule]','pspecs' => 'Aciclovir/Acyclovir, 200 mg, Tablet/Capsule, Originator-Zovirax (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 25 Tablet/Capsule
            Active substance(s): Aciclovir/Acyclovir
            Type of license: Originator
            Strength: 200 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Zovirax
            Target pack size (if unavailable, price a pack of similar size): 25 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antiviral
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111062','pname' => 'Aciclovir/Acyclovir, 200 mg, Tablet/Capsule, Originator-Other brand [25 Tablet/Capsule]','pspecs' => 'Aciclovir/Acyclovir, 200 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 25 Tablet/Capsule
            Active substance(s): Aciclovir/Acyclovir
            Type of license: Originator
            Strength: 200 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Zovirax
            Target pack size (if unavailable, price a pack of similar size): 25 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antiviral
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111071','pname' => 'Albendazole, 400 mg, Tablet/Capsule, Originator-Albenza (GlaxoSmithKline) [1 Tablet/Capsule]','pspecs' => 'Albendazole, 400 mg, Tablet/Capsule, Originator-Albenza (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 1 Tablet/Capsule
            Active substance(s): Albendazole
            Type of license: Originator
            Strength: 400 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Albenza
            Target pack size (if unavailable, price a pack of similar size): 1 Tablet/Capsule
            Price for: 1 pack
            Common medical use: Anthelmintic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111072','pname' => 'Albendazole, 400 mg, Tablet/Capsule, Originator-Zentel (GlaxoSmithKline) [1 Tablet/Capsule]','pspecs' => 'Albendazole, 400 mg, Tablet/Capsule, Originator-Zentel (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 1 Tablet/Capsule
            Active substance(s): Albendazole
            Type of license: Originator
            Strength: 400 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Zentel
            Target pack size (if unavailable, price a pack of similar size): 1 Tablet/Capsule
            Price for: 1 pack
            Common medical use: Anthelmintic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111073','pname' => 'Albendazole, 400 mg, Tablet/Capsule, Originator-Other brand [1 Tablet/Capsule]','pspecs' => 'Albendazole, 400 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 1 Tablet/Capsule
            Active substance(s): Albendazole
            Type of license: Originator
            Strength: 400 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 1 Tablet/Capsule
            Price for: 1 pack
            Common medical use: Anthelmintic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111081','pname' => 'Amlodipine, 5 mg, Tablet/Capsule, Generic-National brand [28 Tablet/Capsule]','pspecs' => 'Amlodipine, 5 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Amlodipine
            Type of license: Generic
            Strength: 5 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111082','pname' => 'Amlodipine, 5 mg, Tablet/Capsule, Generic-Regional brand [28 Tablet/Capsule]','pspecs' => 'Amlodipine, 5 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Amlodipine
            Type of license: Generic
            Strength: 5 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111091','pname' => 'Amlodipine, 5 mg, Tablet/Capsule, Originator-Amlor (Pfizer) [28 Tablet/Capsule]','pspecs' => 'Amlodipine, 5 mg, Tablet/Capsule, Originator-Amlor (Pfizer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Amlodipine
            Type of license: Originator
            Strength: 5 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Amlor
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111092','pname' => 'Amlodipine, 5 mg, Tablet/Capsule, Originator-Norvasc (Pfizer) [28 Tablet/Capsule]','pspecs' => 'Amlodipine, 5 mg, Tablet/Capsule, Originator-Norvasc (Pfizer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Amlodipine
            Type of license: Originator
            Strength: 5 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Norvasc
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111093','pname' => 'Amlodipine, 5 mg, Tablet/Capsule, Originator-Other brand [28 Tablet/Capsule]','pspecs' => 'Amlodipine, 5 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Amlodipine
            Type of license: Originator
            Strength: 5 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111101','pname' => 'Amoxicillin, 250 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Amoxicillin, 250 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Amoxicillin
            Type of license: Generic
            Strength: 250 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111102','pname' => 'Amoxicillin, 250 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Amoxicillin, 250 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Amoxicillin
            Type of license: Generic
            Strength: 250 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111111','pname' => 'Amoxicillin, 250 mg, Tablet/Capsule, Originator-Amoxil (GlaxoSmithKline) [30 Tablet/Capsule]','pspecs' => 'Amoxicillin, 250 mg, Tablet/Capsule, Originator-Amoxil (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Amoxicillin
            Type of license: Originator
            Strength: 250 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Amoxil
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111112','pname' => 'Amoxicillin, 250 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Amoxicillin, 250 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Amoxicillin
            Type of license: Originator
            Strength: 250 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111121','pname' => 'Atenolol, 50 mg, Tablet/Capsule, Generic-National brand [28 Tablet/Capsule]','pspecs' => 'Atenolol, 50 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Atenolol
            Type of license: Generic
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111122','pname' => 'Atenolol, 50 mg, Tablet/Capsule, Generic-Regional brand [28 Tablet/Capsule]','pspecs' => 'Atenolol, 50 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Atenolol
            Type of license: Generic
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111131','pname' => 'Atenolol, 50 mg, Tablet/Capsule, Originator-Tenormin (Astra Zeneca) [28 Tablet/Capsule]','pspecs' => 'Atenolol, 50 mg, Tablet/Capsule, Originator-Tenormin (Astra Zeneca)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Atenolol
            Type of license: Originator
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Tenormin
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111132','pname' => 'Atenolol, 50 mg, Tablet/Capsule, Originator-Other brand [28 Tablet/Capsule]','pspecs' => 'Atenolol, 50 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Atenolol
            Type of license: Originator
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111141','pname' => 'Atorvastatin, 40 mg, Tablet/Capsule, Generic-National brand [28 Tablet/Capsule]','pspecs' => 'Atorvastatin, 40 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Atorvastatin
            Type of license: Generic
            Strength: 40 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Cholesterol-lowering
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111142','pname' => 'Atorvastatin, 40 mg, Tablet/Capsule, Generic-Regional brand [28 Tablet/Capsule]','pspecs' => 'Atorvastatin, 40 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Atorvastatin
            Type of license: Generic
            Strength: 40 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Cholesterol-lowering
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111151','pname' => 'Atorvastatin, 40 mg, Tablet/Capsule, Originator-Lipitor (Pfizer) [28 Tablet/Capsule]','pspecs' => 'Atorvastatin, 40 mg, Tablet/Capsule, Originator-Lipitor (Pfizer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Atorvastatin
            Type of license: Originator
            Strength: 40 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Lipitor
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Cholesterol-lowering
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111152','pname' => 'Atorvastatin, 40 mg, Tablet/Capsule, Originator-Liprimar (GOEDECKE GmbH, Germany) [28 Tablet/Capsule]','pspecs' => 'Atorvastatin, 40 mg, Tablet/Capsule, Originator-Liprimar (GOEDECKE GmbH, Germany)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Atorvastatin
            Type of license: Originator
            Strength: 40 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Liprimar
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Cholesterol-lowering
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111153','pname' => 'Atorvastatin, 40 mg, Tablet/Capsule, Originator-Other brand [28 Tablet/Capsule]','pspecs' => 'Atorvastatin, 40 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 28 Tablet/Capsule
            Active substance(s): Atorvastatin
            Type of license: Originator
            Strength: 40 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 28 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Cholesterol-lowering
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111161','pname' => 'Azithromycin, 500 mg, Tablet/Capsule, Generic-National brand [6 Tablet/Capsule]','pspecs' => 'Azithromycin, 500 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 6 Tablet/Capsule
            Active substance(s): Azithromycin
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 6 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111162','pname' => 'Azithromycin, 500 mg, Tablet/Capsule, Generic-Regional brand [6 Tablet/Capsule]','pspecs' => 'Azithromycin, 500 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 6 Tablet/Capsule
            Active substance(s): Azithromycin
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 6 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111171','pname' => 'Azithromycin, 500 mg, Tablet/Capsule, Originator-Sumamed (PLIVA HRVATSKA doo, Croatia) [6 Tablet/Capsule]','pspecs' => 'Azithromycin, 500 mg, Tablet/Capsule, Originator-Sumamed (PLIVA HRVATSKA doo, Croatia)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 6 Tablet/Capsule
            Active substance(s): Azithromycin
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Sumamed
            Target pack size (if unavailable, price a pack of similar size): 6 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111172','pname' => 'Azithromycin, 500 mg, Tablet/Capsule, Originator-Zithromax (Pfizer) [6 Tablet/Capsule]','pspecs' => 'Azithromycin, 500 mg, Tablet/Capsule, Originator-Zithromax (Pfizer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 6 Tablet/Capsule
            Active substance(s): Azithromycin
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Zithromax
            Target pack size (if unavailable, price a pack of similar size): 6 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111173','pname' => 'Azithromycin, 500 mg, Tablet/Capsule, Originator-Other brand [6 Tablet/Capsule]','pspecs' => 'Azithromycin, 500 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 6 Tablet/Capsule
            Active substance(s): Azithromycin
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 6 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111181','pname' => 'Captopril, 25 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Captopril, 25 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Captopril
            Type of license: Generic
            Strength: 25 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111182','pname' => 'Captopril, 25 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Captopril, 25 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Captopril
            Type of license: Generic
            Strength: 25 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111191','pname' => 'Captopril, 25 mg, Tablet/Capsule, Originator-Capoten (Bristol Myers Squibb) [30 Tablet/Capsule]','pspecs' => 'Captopril, 25 mg, Tablet/Capsule, Originator-Capoten (Bristol Myers Squibb)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Captopril
            Type of license: Originator
            Strength: 25 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Capoten
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111192','pname' => 'Captopril, 25 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Captopril, 25 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Captopril
            Type of license: Originator
            Strength: 25 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111201','pname' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Generic-National brand [100 Tablet/Capsule]','pspecs' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 100 Tablet/Capsule
            Active substance(s): Ciprofloxacin
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 100 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111202','pname' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Generic-Regional brand [100 Tablet/Capsule]','pspecs' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 100 Tablet/Capsule
            Active substance(s): Ciprofloxacin
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 100 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111211','pname' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Originator-Ciprobay (Bayer) [100 Tablet/Capsule]','pspecs' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Originator-Ciprobay (Bayer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 100 Tablet/Capsule
            Active substance(s): Ciprofloxacin
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Ciprobay
            Target pack size (if unavailable, price a pack of similar size): 100 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111212','pname' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Originator-Ciproxin (Bayer) [100 Tablet/Capsule]','pspecs' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Originator-Ciproxin (Bayer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 100 Tablet/Capsule
            Active substance(s): Ciprofloxacin
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Ciproxin
            Target pack size (if unavailable, price a pack of similar size): 100 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111213','pname' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Originator-Other brand [100 Tablet/Capsule]','pspecs' => 'Ciprofloxacin, 500 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 100 Tablet/Capsule
            Active substance(s): Ciprofloxacin
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 100 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111221','pname' => 'Diclofenac, 50 mg, Tablet/Capsule, Generic-National brand [20 Tablet/Capsule]','pspecs' => 'Diclofenac, 50 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Diclofenac
            Type of license: Generic
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111222','pname' => 'Diclofenac, 50 mg, Tablet/Capsule, Generic-Regional brand [20 Tablet/Capsule]','pspecs' => 'Diclofenac, 50 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Diclofenac
            Type of license: Generic
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111231','pname' => 'Diclofenac, 50 mg, Tablet/Capsule, Originator-Voltaren (Novartis) [20 Tablet/Capsule]','pspecs' => 'Diclofenac, 50 mg, Tablet/Capsule, Originator-Voltaren (Novartis)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Diclofenac
            Type of license: Originator
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Voltaren
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111232','pname' => 'Diclofenac, 50 mg, Tablet/Capsule, Originator-Voltarol (Novartis) [20 Tablet/Capsule]','pspecs' => 'Diclofenac, 50 mg, Tablet/Capsule, Originator-Voltarol (Novartis)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Diclofenac
            Type of license: Originator
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Voltarol
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111233','pname' => 'Diclofenac, 50 mg, Tablet/Capsule, Originator-Other brand [20 Tablet/Capsule]','pspecs' => 'Diclofenac, 50 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Diclofenac
            Type of license: Originator
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111241','pname' => 'Doxycycline, 100 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Doxycycline, 100 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Doxycycline
            Type of license: Generic
            Strength: 100 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111242','pname' => 'Doxycycline, 100 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Doxycycline, 100 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Doxycycline
            Type of license: Generic
            Strength: 100 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111251','pname' => 'Doxycycline, 100 mg, Tablet/Capsule, Originator-Vibramycin (Pfizer) [30 Tablet/Capsule]','pspecs' => 'Doxycycline, 100 mg, Tablet/Capsule, Originator-Vibramycin (Pfizer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Doxycycline
            Type of license: Originator
            Strength: 100 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Vibramycin
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111252','pname' => 'Doxycycline, 100 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Doxycycline, 100 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Doxycycline
            Type of license: Originator
            Strength: 100 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antibacterial
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111261','pname' => 'Enalapril, 10 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Enalapril, 10 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Enalapril maleate
            Type of license: Generic
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111262','pname' => 'Enalapril, 10 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Enalapril, 10 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Enalapril maleate
            Type of license: Generic
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111271','pname' => 'Enalapril, 10 mg, Tablet/Capsule, Originator-Ednyt (Medimpex France Sa) [30 Tablet/Capsule]','pspecs' => 'Enalapril, 10 mg, Tablet/Capsule, Originator-Ednyt (Medimpex France Sa)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Enalapril maleate
            Type of license: Originator
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Ednyt
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111272','pname' => 'Enalapril, 10 mg, Tablet/Capsule, Originator-Renite (Merck Sharp & Dohme, MSD) [30 Tablet/Capsule]','pspecs' => 'Enalapril, 10 mg, Tablet/Capsule, Originator-Renite (Merck Sharp & Dohme, MSD)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Enalapril maleate
            Type of license: Originator
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Renite
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111273','pname' => 'Enalapril, 10 mg, Tablet/Capsule, Originator-Renitec (Merck Sharp & Dohme, MSD) [30 Tablet/Capsule]','pspecs' => 'Enalapril, 10 mg, Tablet/Capsule, Originator-Renitec (Merck Sharp & Dohme, MSD)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Enalapril maleate
            Type of license: Originator
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Renitec
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111274','pname' => 'Enalapril, 10 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Enalapril, 10 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Enalapril maleate
            Type of license: Originator
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihypertensive
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111281','pname' => 'Fluoxetine, 20 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Fluoxetine, 20 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Fluoxetine
            Type of license: Generic
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidepressant
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111282','pname' => 'Fluoxetine, 20 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Fluoxetine, 20 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Fluoxetine
            Type of license: Generic
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidepressant
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111291','pname' => 'Fluoxetine, 20 mg, Tablet/Capsule, Originator-Prozac (Eli Lilly) [30 Tablet/Capsule]','pspecs' => 'Fluoxetine, 20 mg, Tablet/Capsule, Originator-Prozac (Eli Lilly)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Fluoxetine
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Prozac
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidepressant
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111292','pname' => 'Fluoxetine, 20 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Fluoxetine, 20 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Fluoxetine
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidepressant
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111301','pname' => 'Furosemide, 40 mg, Tablet/Capsule, Generic-National brand [12 Tablet/Capsule]','pspecs' => 'Furosemide, 40 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 12 Tablet/Capsule
            Active substance(s): Furosemide
            Type of license: Generic
            Strength: 40 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 12 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Diuretic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111302','pname' => 'Furosemide, 40 mg, Tablet/Capsule, Generic-Regional brand [12 Tablet/Capsule]','pspecs' => 'Furosemide, 40 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 12 Tablet/Capsule
            Active substance(s): Furosemide
            Type of license: Generic
            Strength: 40 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 12 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Diuretic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111311','pname' => 'Furosemide, 40 mg, Tablet/Capsule, Originator-Lasix (Sanofi Aventis) [12 Tablet/Capsule]','pspecs' => 'Furosemide, 40 mg, Tablet/Capsule, Originator-Lasix (Sanofi Aventis)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 12 Tablet/Capsule
            Active substance(s): Furosemide
            Type of license: Originator
            Strength: 40 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Lasix
            Target pack size (if unavailable, price a pack of similar size): 12 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Diuretic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111312','pname' => 'Furosemide, 40 mg, Tablet/Capsule, Originator-Other brand [12 Tablet/Capsule]','pspecs' => 'Furosemide, 40 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 12 Tablet/Capsule
            Active substance(s): Furosemide
            Type of license: Originator
            Strength: 40 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 12 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Diuretic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111321','pname' => 'Glibenclamide, 5 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Glibenclamide, 5 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Glibenclamide
            Type of license: Generic
            Strength: 5 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidiabetic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111322','pname' => 'Glibenclamide, 5 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Glibenclamide, 5 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Glibenclamide
            Type of license: Generic
            Strength: 5 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidiabetic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111331','pname' => 'Glibenclamide, 5 mg, Tablet/Capsule, Originator-Daonil (Sanofi Aventis) [30 Tablet/Capsule]','pspecs' => 'Glibenclamide, 5 mg, Tablet/Capsule, Originator-Daonil (Sanofi Aventis)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Glibenclamide
            Type of license: Originator
            Strength: 5 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Daonil
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidiabetic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111332','pname' => 'Glibenclamide, 5 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Glibenclamide, 5 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Glibenclamide
            Type of license: Originator
            Strength: 5 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidiabetic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111341','pname' => 'Ibuprofen, 400 mg, Tablet/Capsule, Generic-National brand [24 Tablet/Capsule]','pspecs' => 'Ibuprofen, 400 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 24 Tablet/Capsule
            Active substance(s): Ibuprofen
            Type of license: Generic
            Strength: 400 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 24 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111342','pname' => 'Ibuprofen, 400 mg, Tablet/Capsule, Generic-Regional brand [24 Tablet/Capsule]','pspecs' => 'Ibuprofen, 400 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 24 Tablet/Capsule
            Active substance(s): Ibuprofen
            Type of license: Generic
            Strength: 400 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 24 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111351','pname' => 'Ibuprofen, 400 mg, Tablet/Capsule, Originator-Brufen (Abbott) [24 Tablet/Capsule]','pspecs' => 'Ibuprofen, 400 mg, Tablet/Capsule, Originator-Brufen (Abbott)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 24 Tablet/Capsule
            Active substance(s): Ibuprofen
            Type of license: Originator
            Strength: 400 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Brufen
            Target pack size (if unavailable, price a pack of similar size): 24 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111352','pname' => 'Ibuprofen, 400 mg, Tablet/Capsule, Originator-Nurofen (Knoll) [24 Tablet/Capsule]','pspecs' => 'Ibuprofen, 400 mg, Tablet/Capsule, Originator-Nurofen (Knoll)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 24 Tablet/Capsule
            Active substance(s): Ibuprofen
            Type of license: Originator
            Strength: 400 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Nurofen
            Target pack size (if unavailable, price a pack of similar size): 24 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111353','pname' => 'Ibuprofen, 400 mg, Tablet/Capsule, Originator-Other brand [24 Tablet/Capsule]','pspecs' => 'Ibuprofen, 400 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 24 Tablet/Capsule
            Active substance(s): Ibuprofen
            Type of license: Originator
            Strength: 400 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 24 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Anti-inflammatory and analgesic (i.e. pain reliever)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111361','pname' => 'Loratidine, 10 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Loratidine, 10 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Loratidine
            Type of license: Generic
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihistamine
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111362','pname' => 'Loratidine, 10 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Loratidine, 10 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Loratidine
            Type of license: Generic
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihistamine
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111371','pname' => 'Loratidine, 10 mg, Tablet/Capsule, Originator-Claritin (Bayer) [30 Tablet/Capsule]','pspecs' => 'Loratidine, 10 mg, Tablet/Capsule, Originator-Claritin (Bayer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Loratidine
            Type of license: Originator
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Claritin
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihistamine
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111372','pname' => 'Loratidine, 10 mg, Tablet/Capsule, Originator-Clarityne (Bayer) [30 Tablet/Capsule]','pspecs' => 'Loratidine, 10 mg, Tablet/Capsule, Originator-Clarityne (Bayer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Loratidine
            Type of license: Originator
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Clarityne
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihistamine
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111373','pname' => 'Loratidine, 10 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Loratidine, 10 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Loratidine
            Type of license: Originator
            Strength: 10 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antihistamine
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111381','pname' => 'Losartan, 50 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Losartan, 50 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Losartan
            Type of license: Generic
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111382','pname' => 'Losartan, 50 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Losartan, 50 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Losartan
            Type of license: Generic
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111391','pname' => 'Losartan, 50 mg, Tablet/Capsule, Originator-Cozaar (Merck Sharp & Dohme, MSD) [30 Tablet/Capsule]','pspecs' => 'Losartan, 50 mg, Tablet/Capsule, Originator-Cozaar (Merck Sharp & Dohme, MSD)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Losartan
            Type of license: Originator
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Cozaar
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111392','pname' => 'Losartan, 50 mg, Tablet/Capsule, Originator-Hyzaar (Merck Sharp & Dohme, MSD) [30 Tablet/Capsule]','pspecs' => 'Losartan, 50 mg, Tablet/Capsule, Originator-Hyzaar (Merck Sharp & Dohme, MSD)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Losartan
            Type of license: Originator
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Hyzaar
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111393','pname' => 'Losartan, 50 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Losartan, 50 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Losartan
            Type of license: Originator
            Strength: 50 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111401','pname' => 'Metformin, 500 mg, Tablet/Capsule, Generic-National brand [10 Tablet/Capsule]','pspecs' => 'Metformin, 500 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 10 Tablet/Capsule
            Active substance(s): Metformin
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 10 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidiabetic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111402','pname' => 'Metformin, 500 mg, Tablet/Capsule, Generic-Regional brand [10 Tablet/Capsule]','pspecs' => 'Metformin, 500 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 10 Tablet/Capsule
            Active substance(s): Metformin
            Type of license: Generic
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 10 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidiabetic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111411','pname' => 'Metformin, 500 mg, Tablet/Capsule, Originator-Glucophage (Bristol-Myers Squibb) [10 Tablet/Capsule]','pspecs' => 'Metformin, 500 mg, Tablet/Capsule, Originator-Glucophage (Bristol-Myers Squibb)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 10 Tablet/Capsule
            Active substance(s): Metformin
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Glucophage
            Target pack size (if unavailable, price a pack of similar size): 10 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidiabetic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111412','pname' => 'Metformin, 500 mg, Tablet/Capsule, Originator-Other brand [10 Tablet/Capsule]','pspecs' => 'Metformin, 500 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 10 Tablet/Capsule
            Active substance(s): Metformin
            Type of license: Originator
            Strength: 500 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 10 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antidiabetic
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111421','pname' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Generic-National brand [60 Tablet/Capsule]','pspecs' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 60 Tablet/Capsule
            Active substance(s): Nifedipine
            Type of license: Generic
            Strength: 20 mg
            Dosage form: Retard Tablet (i.e. slow-release)
            Target pack size (if unavailable, price a pack of similar size): 60 Retard Tablets
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111422','pname' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Generic-Regional brand [60 Tablet/Capsule]','pspecs' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 60 Tablet/Capsule
            Active substance(s): Nifedipine
            Type of license: Generic
            Strength: 20 mg
            Dosage form: Retard Tablet (i.e. slow-release)
            Target pack size (if unavailable, price a pack of similar size): 60 Retard Tablets
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111431','pname' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Originator-Adalat Retard (Bayer) [60 Tablet/Capsule]','pspecs' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Originator-Adalat Retard (Bayer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 60 Tablet/Capsule
            Active substance(s): Nifedipine
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Retard Tablet (i.e. slow-release)
            Brand/Trade name(s), such as: Adalat Retard
            Target pack size (if unavailable, price a pack of similar size): 60 Retard Tablets
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111432','pname' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Originator-Nifedical XL 30 mg (Teva) [60 Tablet/Capsule]','pspecs' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Originator-Nifedical XL 30 mg (Teva)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 60 Tablet/Capsule
            Active substance(s): Nifedipine
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Retard Tablet (i.e. slow-release)
            Brand/Trade name(s), such as: Nifedical
            Target pack size (if unavailable, price a pack of similar size): 60 Retard Tablets
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111433','pname' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Originator-Procardia 30 mg (Pfizer) [60 Tablet/Capsule]','pspecs' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Originator-Procardia 30 mg (Pfizer)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 60 Tablet/Capsule
            Active substance(s): Nifedipine
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Retard Tablet (i.e. slow-release)
            Brand/Trade name(s), such as: Procardia
            Target pack size (if unavailable, price a pack of similar size): 60 Retard Tablets
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111434','pname' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Originator-Other brand [60 Tablet/Capsule]','pspecs' => 'Nifedipine retard, 20 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 60 Tablet/Capsule
            Active substance(s): Nifedipine
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Retard Tablet (i.e. slow-release)
            Target pack size (if unavailable, price a pack of similar size): 60 Retard Tablets
            Price for: 1 pack
            Common medical use: Treat high blood presure (hypertension)
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111441','pname' => 'Omeprazole, 20 mg, Tablet/Capsule, Generic-National brand [20 Tablet/Capsule]','pspecs' => 'Omeprazole, 20 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Omeprazole
            Type of license: Generic
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antacid
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111442','pname' => 'Omeprazole, 20 mg, Tablet/Capsule, Generic-Regional brand [20 Tablet/Capsule]','pspecs' => 'Omeprazole, 20 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Omeprazole
            Type of license: Generic
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antacid
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111451','pname' => 'Omeprazole, 20 mg, Tablet/Capsule, Originator-Losec (AstraZeneca) [20 Tablet/Capsule]','pspecs' => 'Omeprazole, 20 mg, Tablet/Capsule, Originator-Losec (AstraZeneca)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Omeprazole
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Losec
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antacid
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111452','pname' => 'Omeprazole, 20 mg, Tablet/Capsule, Originator-Other brand [20 Tablet/Capsule]','pspecs' => 'Omeprazole, 20 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Omeprazole
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antacid
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111461','pname' => 'Oral rehydration salts, WHO/UNICEF formulation, Oral Suspension, Generic-National brand [3 Powder Sachet (20.5g)]','pspecs' => 'Oral rehydration salts, WHO/UNICEF formulation, Oral Suspension, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 3 Powder Sachet (20.5g)
            Active substance(s): Oral rehydration salts
            Type of license: Generic
            Strength: WHO/UNICEF formulation
            Dosage form: Powder sachet for oral suspension
            Brand/Trade name(s), such as: [No Originator Brand]
            Target pack size (if unavailable, price a pack of similar size): 3 powder sachets, each sachet containing 20.5g, or a total of 61.5g
            Price for: 1 box of 3 powder sachets
            Common medical use: Prevention and treatment of dehydration due to diarrhea and cholera
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111462','pname' => 'Oral rehydration salts, WHO/UNICEF formulation, Oral Suspension, Generic-Regional brand [3 Powder Sachet (20.5g)]','pspecs' => 'Oral rehydration salts, WHO/UNICEF formulation, Oral Suspension, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 3 Powder Sachet (20.5g)
            Active substance(s): Oral rehydration salts
            Type of license: Generic
            Strength: WHO/UNICEF formulation
            Dosage form: Powder sachet for oral suspension
            Brand/Trade name(s), such as: [No Originator Brand]
            Target pack size (if unavailable, price a pack of similar size): 3 powder sachets, each sachet containing 20.5g, or a total of 61.5g
            Price for: 1 box of 3 powder sachets
            Common medical use: Prevention and treatment of dehydration due to diarrhoea and cholera
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111471','pname' => 'Ranitidine, 150 mg, Tablet/Capsule, Originator-Zantac (GlaxoSmithKline) [20 Tablet/Capsule]','pspecs' => 'Ranitidine, 150 mg, Tablet/Capsule, Originator-Zantac (GlaxoSmithKline)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Ranitidine
            Type of license: Originator
            Strength: 150 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Zantac
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antacid
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111472','pname' => 'Ranitidine, 150 mg, Tablet/Capsule, Originator-Other brand [20 Tablet/Capsule]','pspecs' => 'Ranitidine, 150 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 20 Tablet/Capsule
            Active substance(s): Ranitidine
            Type of license: Originator
            Strength: 150 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 20 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Antacid
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111481','pname' => 'Simvastatin, 20 mg, Tablet/Capsule, Generic-National brand [30 Tablet/Capsule]','pspecs' => 'Simvastatin, 20 mg, Tablet/Capsule, Generic-National brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Simvastatin
            Type of license: Generic
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Cholesterol-lowering
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111482','pname' => 'Simvastatin, 20 mg, Tablet/Capsule, Generic-Regional brand [30 Tablet/Capsule]','pspecs' => 'Simvastatin, 20 mg, Tablet/Capsule, Generic-Regional brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Simvastatin
            Type of license: Generic
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Cholesterol-lowering
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product, if available; and (iii) name of the manufacturer'),
            array('pcode' => '1106111491','pname' => 'Simvastatin, 20 mg, Tablet/Capsule, Originator-Zocor (Merck Sharp & Dohme, MSD) [30 Tablet/Capsule]','pspecs' => 'Simvastatin, 20 mg, Tablet/Capsule, Originator-Zocor (Merck Sharp & Dohme, MSD)
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Simvastatin
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Brand/Trade name(s), such as: Zocor
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Cholesterol-lowering
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106111492','pname' => 'Simvastatin, 20 mg, Tablet/Capsule, Originator-Other brand [30 Tablet/Capsule]','pspecs' => 'Simvastatin, 20 mg, Tablet/Capsule, Originator-Other brand
            Included in HAI/WHO List(s): Global, Regional or Individual Country list
            Quantity (if unavailable, price a similar quantity): 30 Tablet/Capsule
            Active substance(s): Simvastatin
            Type of license: Originator
            Strength: 20 mg
            Dosage form: Tablet/Capsule
            Target pack size (if unavailable, price a pack of similar size): 30 Tablets/Capsules
            Price for: 1 pack
            Common medical use: Cholesterol-lowering
            Price concept: Full Market Price
            (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-Profit institutions/Social Security)
            Specify: (i) Pack size found, (ii) brand/trade name of the product; and (iii) name of the manufacturer'),
            array('pcode' => '1106121010','pname' => 'Absorbent cotton wool, BL [100 Gram]','pspecs' => 'Absorbent cotton wool, BL
            Brand: Brandless
            Preferred quantity: 100
            Quantity range: 100 - 200 Gram
            Type: Absorbent cotton wool
            Material: 100% Cotton
            Use: First aid, wound care, baby care, etc.
            Packaging: Plastic bag
            Exclude: Cotton balls
            Specify: Label, if any'),
            array('pcode' => '1106121020','pname' => 'Clinical Thermometer, Mercury, WKB [1 Piece]','pspecs' => 'Clinical Thermometer, Mercury, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Like model "T6-16"
            Use: Under-arm temperature measurement
            Packaging: Plastic case
            Specify: Brand'),
            array('pcode' => '1106121030','pname' => 'Digital therapeutical thermometer, WKB [1 Piece]','pspecs' => 'Digital therapeutical thermometer, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Digital therapeutical thermometer, battery operated
            Use: Oral, rectal and armpit temperature measuring
            Exclude: Models with solar panel, ear temperature measuring, or probe covers, disposable thermometers
            Specify: Brand'),
            array('pcode' => '1106121040','pname' => 'Disposable syringe, for intramuscular injection, WKB [1 Piece]','pspecs' => 'Disposable syringe, for intramuscular injection, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Disposable syringe for intramuscular injection
            Material: Sterile polypropylene
            Size: Needle size 0.8 mm x 40 mm
            Specify: Brand'),
            array('pcode' => '1106121050','pname' => 'Gauze bandage, WKB [1 Piece]','pspecs' => 'Gauze bandage, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Material: Mainly cotton
            Size: Width
            Packaging: Paper wrapper or polyethylene package
            Specify: Brand'),
            array('pcode' => '1106121060','pname' => 'Home pregnancy test, WKB [1 Piece]','pspecs' => 'Home pregnancy test, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Home pregnancy test, measurement in urine (under urine stream)
            Exclude: Dipstrip tests, digital tests, early diagnosis tests
            Specify: Brand'),
            array('pcode' => '1106121090','pname' => 'Men\'s condoms, multipack, WKB [3 Piece]','pspecs' => 'Men\'s condoms, multipack, WKB
            Brand: Well Known
            Preferred quantity: 3
            Quantity range: 3 - 6 Piece
            Type: Men\'s condoms
            Material: Latex
            Packaging: Multipack of 3-6 condoms
            Exclude: Condoms with raised dots, ribs or special lubricant (benzocaine)
            Specify: Brand'),
            array('pcode' => '1106121100','pname' => 'Plaster strips, plastic foil, WKB [20 Piece]','pspecs' => 'Plaster strips, plastic foil, WKB
            Brand: Well Known
            Preferred quantity: 20
            Quantity range: 16 - 30 Piece
            Type: Adhesive strips for wounds
            Material: Plastic foil
            Size: Strip dimensions 1.9 cm x 7.2 cm
            Use: Wound care
            Exclude: Textile plasters
            Specify: Brand'),
            array('pcode' => '1106121110','pname' => 'Soaking solution for contact lenses, "Bausch & Lomb" - Renu multi Plus [240 Milliliter]','pspecs' => 'Soaking solution for contact lenses, "Bausch & Lomb" - Renu multi Plus
            Brand: Bausch & Lomb - Renu multi Plus
            Preferred quantity: 240
            Quantity range: 200 - 400 Milliliter
            Use: Soaking Solution (preservation fluid)
            Packaging: Plastic bottle'),
            array('pcode' => '1106121120','pname' => 'Soaking solution for contact lenses, WKB [240 Milliliter]','pspecs' => 'Soaking solution for contact lenses, WKB
            Brand: Well known other than Bausch & Lomb, Ciba-Vision and Alcon
            Preferred quantity: 240
            Quantity range: 200 - 400 Milliliter
            Use: Soaking Solution (preservation fluid)
            Packaging: Plastic bottle
            Specify: Brand'),
            array('pcode' => '1106121130','pname' => 'Alcohol-based hand sanitizer, WKB [100 Milliliter]','pspecs' => 'Alcohol-based hand sanitizer, WKB
            Brand: Well known
            Preferred quantity: 100
            Quantity range: 50 - 150 Milliliter
            Type: Hand sanitizer containing at least 60% alcohol
            Exclude: 100% alcohol
            Specify: Brand'),
            array('pcode' => '1106121150','pname' => 'Surgical masks, WKB [50 Piece]','pspecs' => 'Surgical masks, WKB
            Brand: Well known
            Preferred quantity: 50
            Quantity range: 40 - 60 Piece
            Type: 3-ply surgical face mask
            Material: Sterile polypropylene
            Use: Single use, disposable
            Exclude: Reusable face masks, cloth maks
            Specify: Brand
            Note: Price 1 box containing approximately 50 pieces'),
            array('pcode' => '1106131010','pname' => 'Automatic blood pressure monitor, upper arm, OMRON, M6 Comfort [1 Piece]','pspecs' => 'Automatic blood pressure monitor, upper arm, OMRON, M6 Comfort
            Brand: Omron
            Model: M6 Comfort
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Automatic blood pressure monitor, battery operated, with comfort cuff
            Use: For upper arm
            Display: Digital'),
            array('pcode' => '1106131020','pname' => 'Forearm crutches, adult, WKB [1 Pair]','pspecs' => 'Forearm crutches, adult, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Pair
            Material: Aluminum alloy; Vinyl arm grip and rubber toecap
            Size/Dimension: Cuff to handle adjustment
            Specify: Brand'),
            array('pcode' => '1106131030','pname' => 'Forearm crutches, youth, WKB [1 Pair]','pspecs' => 'Forearm crutches, youth, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Pair
            Material: Aluminum alloy; Vinyl arm grip and rubber toecap
            Size/Dimension: Cuff to handle adjustment
            Specify: Brand'),
            array('pcode' => '1106131040','pname' => 'Hearing aid, behind-ear, Siemens [1 Piece]','pspecs' => 'Hearing aid, behind-ear, Siemens
            Brand: Siemens
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Behind the ear (wireless digital)
            Specify: Model'),
            array('pcode' => '1106131050','pname' => 'Instrument for measuring arterial pressure sphygmomanometer - manual, WKB [1 Piece]','pspecs' => 'Instrument for measuring arterial pressure sphygmomanometer - manual, WKB
            Brand: Well known such as Baumanometer
            Preferred quantity: 1
            Quantity range: 1 Piece
            Price excludes: Stethoscope or phonendoscope
            Specify: Brand'),
            array('pcode' => '1106131060','pname' => 'Pair of single vision lenses, plastic, WKB [1 Pair]','pspecs' => 'Pair of single vision lenses, plastic, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Pair
            Type: 1 pair of single vision lenses, with standard anti-reflective and scratch-resistant coating
            Material: Organic/plastic, not polycarbonate
            Spherical power: -2 diop spherical power
            Lens diameter: 70 mm
            Thickness: Standard thickness
            Price includes: Mounting
            Price excludes: Frame
            Exclude: Lenses with tints; lenses produced by customer order
            Specify: Brand'),
            array('pcode' => '1106131070','pname' => 'Soft contact lenses, WKB [1 Pair]','pspecs' => 'Soft contact lenses, WKB
            Brand: Well known such as Hydron; Surevue; CibaVision; Bausch&Lomb
            Preferred quantity: 1
            Quantity range: 1 Pair
            Type: Permanent (about 8 months)
            Material: HEMA (hydroxyethylmethacrylate) or alfafilcone
            Spherical power: -6 diop
            Lens diameter: ± 13 mm; Thickness
            Price includes: a pair of lens
            Price excludes: frame
            Exclude: Astigmatism and case and preservation fluid
            Specify: Brand'),
            array('pcode' => '1106131080','pname' => 'Walker (walking frame) for indoors and outdoors, WKB [1 Piece]','pspecs' => 'Walker (walking frame) for indoors and outdoors, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Walker (walking frame) for indoors and outdoor
            Material: Lightweight aluminum alloy
            Specify: Brand, length, weight'),
            array('pcode' => '1106131090','pname' => 'Walking stick, aluminium, WKB [1 Piece]','pspecs' => 'Walking stick, aluminium, WKB
            Brand: Well Known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Simple walking stick
            Material: Aluminum alloy
            Exclude: Walking sticks with specially designed handless or features
            Specify: Brand, length, weight'),
            array('pcode' => '1106131100','pname' => 'Wheelchair for adults, WKB [1 Piece]','pspecs' => 'Wheelchair for adults, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Material: Lightweight metal alloy
            Size/Dimension: Front wheel diameter
            Specify: Brand'),
            array('pcode' => '1106211010','pname' => 'Consultation: eye specialist (ophthalmologist) [1 Service]','pspecs' => 'Consultation: eye specialist (ophthalmologist)
            Preferred quantity: 1 Service
            Establishment: Doctor\'s office, incl. those located in outpatient centers, polyclinics and general clinics
            Establishment type: Private
            Timing of Service: Normal consultation hours
            Service: Medical consultation
            Service Includes: Examination for
            Service by: Professionally certified medical specialist
            Exclude: Services provided by an optician
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106211020','pname' => 'Consultation: general medical practitioner/primary care physician [1 Service]','pspecs' => 'Consultation: general medical practitioner/primary care physician
            Preferred quantity: 1 Service
            Establishment: Doctor\'s office, incl. those located in outpatient centers, polyclinics and general clinics
            Establishment type: Private
            Timing of Service: Normal consultation hours
            Service: Medical consultation
            Service Includes: General diagnosis and responding to common medical problems (e.g. common cold, flu, etc.), medical history taking, and referral and prescription, as appropriate
            Service by: Professionally certified general medical practitioner/primary care physician
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106211030','pname' => 'Consultation: gynecologist [1 Service]','pspecs' => 'Consultation: gynecologist
            Preferred quantity: 1 Service
            Establishment: Doctor\'s office, incl. those located in outpatient centers, polyclinics and general clinics
            Establishment type: Private
            Timing of Service: Normal consultation hours
            Service: Medical consultation
            Service Includes: Genital and breasts examination (visual and palpate) as well as collection of Pap smear test sample (i.e. screening test for cervical cancer)
            Service by: Professionally certified medical specialist
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106211040','pname' => 'Consultation: Internist/cardiologist: Internal illness, specialist, private [1 Service]','pspecs' => 'Consultation: Internist/cardiologist
            Preferred quantity: 1 Service
            Establishment type: Private
            Service: Standard electrocardiogram with written report
            Service by: Doctors must have at least 10 years of experience in the area of specialization and professionally qualified
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106211050','pname' => 'Consultation: pediatrician [1 Service]','pspecs' => 'Consultation: pediatrician
            Preferred quantity: 1 Service
            Establishment: Doctor\'s office, incl. those located in outpatient centers, polyclinics and general clinics
            Establishment type: Private
            Timing of Service: Normal consultation hours
            Service: Medical consultation for children up to 14 years of age
            Service by: Professionally certified pediatrician
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106211060','pname' => 'Consultation: urologist [1 Service]','pspecs' => 'Consultation: urologist
            Preferred quantity: 1 Service
            Establishment: Doctor\'s office, incl. those located in outpatient centers, polyclinics and general clinics
            Establishment type: Private
            Timing of Service: Normal consultation hours
            Service: Medical consultation
            Service by: Professionally certified medical specialist
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106211070','pname' => 'Consultation: Otolaryngologist (private) [1 Service]','pspecs' => 'Consultation: Otolaryngologist (private)
            Preferred quantity: 1 Service
            Timing of Service: Normal working hours (duration of ± 15-20 min)
            Service by: Doctors must have at least 10 years of experience in the area of specialization and professionally qualified
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106221010','pname' => 'Dentist: extraction of a tooth, for adult [1 Service]','pspecs' => 'Dentist: extraction of a tooth, for adult
            Preferred quantity: 1 Service
            Establishment: Dental clinic
            Establishment type: Private
            Timing of service: Normal consultation hours
            Service: Extraction of a tooth, for an adult, in which the root lends to easy removal (i.e. single and straight root, etc.)
            Service by: Professionally certified dentist
            Service includes: Use of local anesthesia by injection
            Service excludes: X-ray(s)
            Exclude: Emergency treatment
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106221020','pname' => 'Dentist: filling of molar tooth [1 Service]','pspecs' => 'Dentist: filling of molar tooth
            Preferred quantity: 1 Service
            Establishment: Dental clinic
            Establishment type: Private
            Timing of service: Normal consultation hours
            Service: Central filling of molar tooth using composite fillings (i.e. a type of white tooth-colored filling)
            Service by: Professionally certified dentist
            Service excludes: Use of local anesthesia
            Exclude: Emergency treatment
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106221030','pname' => 'Dentist: preventive service [1 Service]','pspecs' => 'Dentist: preventive service
            Preferred quantity: 1 Service
            Establishment: Dental clinic
            Establishment type: Private
            Timing of service: Normal consultation hours
            Service: Tooth scaling, clean of sulcus, polish and fluoridate of tooth, for an adult
            Service by: Dentists must have at least 5 years of experience and professionally qualified
            Service excludes: Any other treatments outside of routine cleaning
            Exclude: Emergency treatment
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106221040','pname' => 'Dentist: Root canal treatment private [1 Service]','pspecs' => 'Dentist: Root canal treatment private
            Preferred quantity: 1 Service
            Timing of service: Normal working hours
            Service: Treatment of root to kill the nerve with 2 channels; including local anesthesia
            Service by: Dentists must have at least 5 years of experience and professionally qualified
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106231010','pname' => 'Blood test: complete blood count (hemogram) [1 Service]','pspecs' => 'Blood test: complete blood count (hemogram)
            Preferred quantity: 1 Service
            Establishment: Outpatient centers, polyclinics, general clinics or clinical/medical laboratories
            Establishment type: Private
            Timing of service: Normal consultation hours
            Service: Taking of blood sample and production of test report
            Test includes: White and red blood cell count (WBC, RBC); white blood cell differential; measures of Hemoglobin (HGB); Hematocrit (HCT); Mean Corpuscular Volume (MCV); Mean Corpuscular Hemoglobin (MCH); Mean Corpuscular Hemoglobin Concentration (MCHC); Red Cell Distribution Width (RDW); platelet count (PLT)
            Exclude: Emergency service
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106231020','pname' => 'Hepatitis B test: private [1 Service]','pspecs' => 'Hepatitis B test: private
            Preferred quantity: 1 Service
            Establishment type: Private
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106231030','pname' => 'HIV test: private [1 Service]','pspecs' => 'HIV test: private
            Preferred quantity: 1 Service
            Establishment type: Private
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106231040','pname' => 'Mammogram [1 Service]','pspecs' => 'Mammogram
            Preferred quantity: 1 Service
            Establishment: Outpatient centers, polyclinics, general clinics or clinical/medical laboratories
            Establishment type: Private
            Timing of service: Normal consultation hours
            Service: Mammogram of both breasts
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106231050','pname' => 'Physiotherapist: massage course private [1 Service]','pspecs' => 'Physiotherapist: massage course private
            Preferred quantity: 1 Service
            Establishment type: Private
            Timing of service: Normal working hours
            Service: Massage of shoulder and neck muscles
            Exclude: Emergency service
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106231060','pname' => 'Thorax X-ray photograph, for adult [1 Service]','pspecs' => 'Thorax X-ray photograph, for adult
            Preferred quantity: 1 Service
            Establishment: Outpatient centers, polyclinics, general clinics or clinical/medical laboratories
            Establishment type: Private
            Timing of service: Normal consultation hours
            Service: Adult thorax X-ray photograph of dimensions (approximate)
            Exclude: Emergency service and digital transmission
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106231070','pname' => 'Ultrasound test: private [1 Service]','pspecs' => 'Ultrasound test: private
            Preferred quantity: 1 Service
            Establishment: Private
            Establishment type: Private
            Service: Full test of abdominal cavity (liver, gall-bladder, spleen, pancreas)
            Exclude: Emergency service
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not government/state-owned.'),
            array('pcode' => '1106231080','pname' => 'Urine test [1 Service]','pspecs' => 'Urine test
            Preferred quantity: 1 Service
            Establishment: Outpatient centers, polyclinics, general clinics or clinical/medical laboratories
            Establishment type: Private
            Timing of service: Normal consultation hours
            Service: Taking of urine sample (collected at home or at the health establishment) and production of test report
            Test includes: Urine Ph, Glucose, Protein, Ketone, Blood (Erytrocytes or Hemoglobin), Nitrite, Leucocytes and Urine Sediments
            Exclude: Emergency service
            Price concept: Full Market Price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Remarks: Private establishment means it must be privately operated and not governm ent/state-owned.'),
            array('pcode' => '1106231090','pname' => 'Physiotherapist: individual therapy [1 Session]','pspecs' => 'Physiotherapist: individual therapy
            Preferred quantity: 1 Session
            Establishment: Outpatient centers, polyclinics, general clinics or other licensed establishements
            Establishment type: Private
            Timing of service: Normal consultation hours
            Service: Individual therapy (e.g. gymnastics) after a knee surgery; the full treatment may require 10 sessions or more, but the reported price is for a single session
            Price concept: Full market price (=Out-of-pocket payment by patient to provider + payment to provider by Private Insurance/Non-profit institutions/Social Security)
            Notes: New item'),
            array('pcode' => '1107111010','pname' => 'Motor car, petrol engine, TOYOTA Yaris 1.5 VVT-i [1 Car]','pspecs' => 'Motor car, petrol engine, TOYOTA Yaris 1.5 VVT-i
            Brand: Toyota
            Model: Vios / Yaris / Belta
            Preferred quantity: 1 Car
            Edition: 1.5 VVT-i
            Drivetrain: 2WD
            Body style: Hatchback
            Engine size (cc): 1496 cc
            Engine power (kW / HP): 82 kW / 111 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111020','pname' => 'Motor car, petrol engine, TOYOTA Vios/Yaris Ativ 1.3 VVT-i [1 Car]','pspecs' => 'Motor car, petrol engine, TOYOTA Vios / Yaris Ativ 1.3 VVT-i
            Brand: Toyota
            Model: Vios / Yaris Ativ
            Preferred quantity: 1 Car
            Edition: 1.3 VVT-i
            Drivetrain: 2WD
            Body style: Sedan
            Engine size (cc): 1329 cc
            Engine power (kW / HP): 73 kW / 99 hp
            Doors: 4
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111030','pname' => 'Motor car, petrol engine, TOYOTA Corolla Altis 1.6 VVT-i [1 Car]','pspecs' => 'Motor car, petrol engine, TOYOTA Corolla Altis 1.6 VVT-i
            Brand: Toyota
            Model: Corolla Altis
            Preferred quantity: 1 Car
            Edition: 1.6 VVT-i
            Drivetrain: 2WD
            Body style: Sedan
            Engine size (cc): 1598 cc
            Engine power (kW / HP): 96 kW / 129 hp
            Doors: 4
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111040','pname' => 'Motor car, petrol engine, TOYOTA Corolla 1.8L [1 Car]','pspecs' => 'Motor car, petrol engine, TOYOTA Corolla 1.8L
            Brand: Toyota
            Model: Corolla
            Preferred quantity: 1 Car
            Edition: 1.8 L
            Drivetrain: 2WD
            Body style: Sedan
            Engine size (cc): 1798 cc
            Engine power (kW / HP): 98 kW / 132 hp
            Doors: 4
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111050','pname' => 'Motor car, petrol engine, SUZUKI Swift [1 Car]','pspecs' => 'Motor car, petrol engine, SUZUKI Swift
            Brand: Suzuki
            Model: Swift
            Preferred quantity: 1 Car
            Edition: 1.2 VVT
            Drivetrain: 2WD
            Body style: Hatchback
            Engine size (cc): 1197 cc
            Engine power (kW / HP): 61 kW / 82 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111060','pname' => 'Motor car, petrol engine, SUZUKI Ertiga [1 Car]','pspecs' => 'Motor car, petrol engine, SUZUKI Ertiga
            Brand: Suzuki
            Model: Ertiga
            Preferred quantity: 1 Car
            Edition: 1.5 VVT
            Drivetrain: 2WD
            Body style: MPV
            Engine size (cc): 1462 cc
            Engine power (kW / HP): 77 kW / 103 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111070','pname' => 'Motor car, petrol engine, SUZUKI Dzire [1 Car]','pspecs' => 'Motor car, petrol engine, SUZUKI Dzire
            Brand: Suzuki
            Model: Dzire
            Preferred quantity: 1 Car
            Edition: 1.2 VVT
            Drivetrain: 2WD
            Body style: Sedan
            Engine size (cc): 1197 cc
            Engine power (kW / HP): 61 kW / 182 hp
            Doors: 4
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111110','pname' => 'Motor car, petrol engine, MITSUBISHI Mirage G4 / Attrage [1 Car]','pspecs' => 'Motor car, petrol engine, MITSUBISHI Mirage G4 / Attrage
            Brand: Mitsubishi
            Model: Mirage G4 / Attrage
            Preferred quantity: 1 Car
            Edition: 1.2 L MIVEC
            Drivetrain: 2WD
            Body style: Sedan
            Engine size (cc): 1193 cc
            Engine power (kW / HP): 80 kW / 107 hp
            Doors: 4
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111130','pname' => 'Motor car, petrol engine, HYUNDAI Tucson 2.0 [1 Car]','pspecs' => 'Motor car, petrol engine, HYUNDAI Tucson 2.0
            Brand: Hyundai
            Model: Tucson/ ix35
            Preferred quantity: 1 Car
            Edition: 2.0 L
            Drivetrain: 2WD
            Body style: SUV
            Engine size (cc): 1998 cc
            Engine power (kW / HP): 122 kW / 164 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111140','pname' => 'Motor car, petrol engine, HONDA CR-V 2.0 [1 Car]','pspecs' => 'Motor car, petrol engine, HONDA CR-V 2.0
            Brand: Honda
            Model: CR-V
            Preferred quantity: 1 Car
            Edition: 2.0 i-VTEC
            Drivetrain: 2WD
            Body style: SUV
            Engine size (cc): 1997 cc
            Engine power (kW / HP): 114 kW / 155 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111150','pname' => 'Motor car, petrol engine, HONDA City 1.5 i-VTEC [1 Car]','pspecs' => 'Motor car, petrol engine, HONDA City 1.5 i-VTEC
            Brand: Honda
            Model: City
            Preferred quantity: 1 Car
            Edition: 1.5 i-VTEC
            Drivetrain: 2WD
            Body style: Sedan
            Engine size (cc): 1497 cc
            Engine power (kW / HP): 88 kW / 120 hp
            Doors: 4
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111170','pname' => 'Motor car, diesel engine, TOYOTA Innova Crysta / Kijang [1 Car]','pspecs' => 'Motor car, diesel engine, TOYOTA Innova Crysta / Kijang
            Brand: Toyota
            Model: Innova
            Preferred quantity: 1 Car
            Edition: 2.4 GD
            Drivetrain: 2WD
            Body style: MPV
            Engine size (cc): 2393 cc
            Engine power (kW / HP): 110 kW / 150 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: Slightly modified the specifications'),
            array('pcode' => '1107111180','pname' => 'Motor car, diesel engine, MITSUBISHI Pajero Sport / Montero Sport 2.4 MIVEC [1 Car]','pspecs' => 'Motor car, diesel engine, MITSUBISHI Pajero Sport / Montero Sport 2.4 MIVEC
            Brand: Mitsubishi
            Model: Pajero Sport / Montero Sport
            Preferred quantity: 1 Car
            Edition: 2.4 MIVEC
            Drivetrain: 2WD
            Body style: SUV
            Engine size (cc): 2442 cc
            Engine power (kW / HP): 133 kW / 178 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111190','pname' => 'Motor car, diesel engine, HYUNDAI Tucson, 2.0 CRDi [1 Car]','pspecs' => 'Motor car, diesel engine, HYUNDAI Tucson, 2.0 CRDi
            Brand: Hyundai
            Model: Tucson / ix35
            Preferred quantity: 1 Car
            Edition: 2.0 CRDi (diesel)
            Drivetrain: 4WD / AWD
            Body style: SUV
            Engine size (cc): 1995 cc
            Engine power (kW / HP): 100 kW / 136 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: No change'),
            array('pcode' => '1107111200','pname' => 'Motor car, petrol engine, CHERRY Tiggo 8 Pro Max, 2.0 TGDI [1 Car]','pspecs' => 'Motor car, petrol engine, CHERRY Tiggo 8 Pro Max, 2.0 TGDI
            Brand: Cherry
            Model: Tiggo 8 Pro Max
            Preferred quantity: 1 Car
            Edition: 2.0 TGDI
            Drivetrain: 4WD
            Body style: SUV
            Engine size (cc): 1998 cc
            Engine power (kW / HP): 145 kW / 197 hp
            Doors: 5
            Gears: Automatic / 7
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: New item'),
            array('pcode' => '1107111210','pname' => 'Motor car, petrol engine, GEELY Coolray, 1.5 T [1 Car]','pspecs' => 'Motor car, petrol engine, GEELY Coolray, 1.5 T
            Brand: Geely
            Model: Coolray
            Preferred quantity: 1 Car
            Edition: 1.5T
            Drivetrain: 2WD
            Body style: Hatchback
            Engine size (cc): 1477 cc
            Engine power (kW / HP): 74 kW / 100 hp
            Doors: 5
            Gears: Manual / 6
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: New item'),
            array('pcode' => '1107111220','pname' => 'Motor car, petrol engine, HAVAL Jolion, 1.5 T [1 Car]','pspecs' => 'Motor car, petrol engine, HAVAL Jolion, 1.5 T
            Brand: Haval
            Model: Jolion
            Preferred quantity: 1 Car
            Edition: 1.5T
            Drivetrain: 2WD
            Body style: SUV
            Engine size (cc): 1497 cc
            Engine power (kW / HP): 105 kW / 143 hp
            Doors: 5
            Gears: Manual / 6
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: New item'),
            array('pcode' => '1107111230','pname' => 'Motor car, hybrid engine, HONDA CR-V 2.0 [1 Car]','pspecs' => 'Motor car, hybrid engine, HONDA CR-V 2.0
            Brand: Honda
            Model: CR-V
            Preferred quantity: 1 Car
            Edition: 2.0 Hybrid
            Drivetrain: 2WD
            Body style: SUV
            Engine size (cc): 1993 cc
            Engine power (kW / HP): 135 kW / 184 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: New item'),
            array('pcode' => '1107111240','pname' => 'Motor car, hybrid engine, TOYOTA Corolla 1.8L [1 Car]','pspecs' => 'Motor car, hybrid engine, TOYOTA Corolla 1.8L
            Brand: Toyota
            Model: Corolla
            Preferred quantity: 1 Car
            Edition: 1.8 L
            Drivetrain: 2WD
            Body style: Sedan
            Engine size (cc): 1798cc
            Engine power (kW / HP): 98 kW / 132 hp
            Doors: 4
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: New item'),
            array('pcode' => '1107111250','pname' => 'Motor car, hybrid engine, NISSAN Kicks e-Power [1 Car]','pspecs' => 'Motor car, hybrid engine, NISSAN Kicks e-Power
            Brand: Nissan
            Model: Kicks
            Preferred quantity: 1 Car
            Edition: 1.2 Hybrid e-power
            Drivetrain: 2WD
            Body style: SUV
            Engine size (cc): 1198 cc
            Engine power (kW / HP): 100 kW / 136 hp
            Doors: 5
            Gears: Manual / 6 (preferred); Automatic (allowed) (S)
            Exclude: Registration fees and Insurance
            Specify: Model year, Edition (full name), Gears
            Notes: New item'),
            array('pcode' => '1107121010','pname' => 'Motorcycle, scooter, KYMCO Like 150i ABS [1 Piece]','pspecs' => 'Motorcycle, scooter, KYMCO Like 150i ABS
            Preferred quantity: 1 Piece
            Brand: Kymco
            Model: Like 150i ABS
            Type: Scooter
            Engine displacement: 150 cc
            Engine output: 9.9 kW
            Frame type: Backbone, steel tube
            Cooling: Air
            Cylinders: 1
            Stroke: 4-stroke, 4-valve
            Starter: Electric
            Gears: Automatic CVT
            Front brake: Single disc
            Rear brake: Single disc
            Front suspension: Telescopic
            Rear suspension: Swing arm
            Exclude: Registration fees and Insurance
            Notes: Specifications updated'),
            array('pcode' => '1107121030','pname' => 'Motorcycle, scooter, YAMAHA Aerox 155 [1 Piece]','pspecs' => 'Motorcycle, scooter, YAMAHA Aerox 155
            Preferred quantity: 1 Piece
            Brand: Yamaha
            Model: Aerox
            Type: Scooter
            Engine displacement: 155 cc
            Engine output: 11.3 kW
            Frame type: Backbone, steel tube
            Cooling: Liquid
            Cylinders: 1
            Stroke: 4-stroke, 4-valve
            Starter: Electric
            Gears: V-belt Automatic
            Front brake: Hydraulic single disc
            Rear brake: Drum
            Front suspension: Telescopic
            Rear suspension: Unit swing arm
            Exclude: Registration fees and Insurance
            Notes: Specifications updated'),
            array('pcode' => '1107121040','pname' => 'Motorcycle, HONDA, CBR 125 R [1 Piece]','pspecs' => 'Motorcycle, HONDA, CBR 125 R
            Preferred quantity: 1 Piece
            Brand: Honda
            Model: CBR 125 R
            Type: Light motorcycle
            Engine displacement: 125 cc
            Engine output: Approx. 10 kW (13.4 hp)
            Frame type: Low deck mono backbone, steel tube
            Cooling: Liquid
            Cylinders: 1
            Stroke: 4
            Starter: Electric
            Gears: 6-speed
            Front brake: Single disc
            Rear brake: Single disc
            Front suspension: Telescopic fork
            Rear suspension: Monoshock damper
            Exclude: Registration fees and Insurance
            Notes: No change'),
            array('pcode' => '1107121050','pname' => 'Motorcycle, HONDA, CB 125 F [1 Piece]','pspecs' => 'Motorcycle, HONDA, CB 125 F
            Preferred quantity: 1 Piece
            Brand: Honda
            Model: CB 125 F
            Type: Light motorcycle
            Engine displacement: 125 cc
            Engine output: Approx. 8 kW (11 hp)
            Frame type: Mono backbone, steel tube
            Cooling: Air
            Cylinders: 1
            Stroke: 4
            Starter: Electric
            Gears: 6-speed
            Front brake: Single disc
            Rear brake: Drum
            Front suspension: Telescopic fork
            Rear suspension: Monocross dampers
            Exclude: Registration fees and Insurance
            Notes: New model, replaces Honda Wave'),
            array('pcode' => '1107121060','pname' => 'Motorcycle, scooter, YAMAHA NMAX 125 [1 Piece]','pspecs' => 'Motorcycle, YAMAHA, NMAX 125
            Preferred quantity: 1 Piece
            Brand: Yamaha
            Model: NMAX 125
            Type: Light motorcycle
            Engine displacement: 125 cc
            Engine output: Approx. 9 kW (12 hp)
            Frame type: Mono backbone, steel tube
            Cooling: Air
            Cylinders: 1
            Stroke: 4
            Starter: Electric
            Gears: Automatic
            Front brake: Single disc
            Rear brake: Single disc
            Front suspension: Telescopic fork
            Rear suspension: Monocross dampers
            Exclude: Registration fees and Insurance
            Notes: New model, replaces Yamaha YS 125'),
            array('pcode' => '1107121080','pname' => 'Motorcycle, scooter, SYM Jet X 125 [1 Piece]','pspecs' => 'Motorcycle, scooter, SYM Jet X 125
            Preferred quantity: 1 Piece
            Brand: Sym
            Model: Jet X 125
            Type: Scooter
            Engine displacement: 125 cc
            Engine output: 9.3 kW
            Frame type: Backbone, steel tube
            Cooling: Liquid
            Cylinders: 1
            Stroke: 4-stroke, 4-valve
            Starter: Electric
            Gears: Automatic CVT
            Front brake: Single disc
            Rear brake: Single disc
            Front suspension: Telescopic
            Rear suspension: Unit swing arm
            Exclude: Registration fees and Insurance
            Notes: Specifications updated'),
            array('pcode' => '1107121090','pname' => 'Motorcycle, scooter, HONDA PCX 125 [1 Piece]','pspecs' => 'Motorcycle, scooter, HONDA PCX 125
            Preferred quantity: 1 Piece
            Brand: Honda
            Model: PCX 125
            Type: Scooter
            Engine displacement: 125 cc
            Engine output: Approx. 9 kW (12 hp)
            Frame type: Mono backbone, steel tube
            Cooling: Air
            Cylinders: 1
            Stroke: 4
            Starter: Electric
            Gears: Automatic
            Front brake: Single disc
            Rear brake: Single disc
            Front suspension: Telescopic fork
            Rear suspension: Monocross dampers
            Exclude: Registration fees and Insurance
            Notes: New item'),
            array('pcode' => '1107121100','pname' => 'Motorcycle, scooter, HONDA Scoopy 110 [1 Piece]','pspecs' => 'Motorcycle, scooter, Honda Scoopy 110
            Preferred quantity: 1 Piece
            Brand: Honda
            Model: Scoopy
            Type: Scooter
            Engine displacement: 110 cc
            Engine output: Approx. 7 kW
            Frame type: Underbone: eSAF (Enhanced Smart Architecture Frame)
            Cooling: Air
            Cylinders: 1
            Stroke: 4-stroke, 4-valve
            Starter: Electric
            Gears: V-belt Automatic
            Front brake: single disc
            Rear brake: Drum
            Front suspension: Telescopic
            Rear suspension: Swing unit
            Exclude: Registration fees and Insurance
            Notes: New item'),
            array('pcode' => '1107121110','pname' => 'Motorcycle, scooter, HONDA Vario 125 [1 Piece]','pspecs' => 'Motorcycle, scooter, Honda Vario 125
            Preferred quantity: 1 Piece
            Brand: Honda
            Model: Vario
            Type: Scooter
            Engine displacement: 125 cc
            Engine output: 8.2 kW
            Frame type: Underbone
            Cooling: Liquid
            Cylinders: 1
            Stroke: 4-stroke, 4-valve
            Starter: Electric
            Gears: V-belt Automatic
            Front brake: single disc
            Rear brake: Drum
            Front suspension: Telescopic
            Rear suspension: Unit swing arm
            Exclude: Registration fees and Insurance
            Notes: New item'),
            array('pcode' => '1107121120','pname' => 'Motorcycle, scooter, 50cc, WKB [1 Piece]','pspecs' => 'Motorcycle, scooter, 50 cc, WKB
            Preferred quantity: 1 Piece
            Brand: Well Known, Sym or equivalent
            Model: Mio (S)
            Type: 50 cc scooter
            Engine displacement: 50 cc
            Engine output: 2.7 kW (3.7 hp)
            Frame type: Mono backbone, steel tube
            Cooling: Air
            Cylinders: 1
            Stroke: 4
            Starter: Electric
            Gears: Centrifugal, automatic
            Front brake: Drum or single disc
            Rear brake: Drum or single disc
            Front suspension: Telescopic fork
            Rear suspension: Monocross dampers
            Exclude: Registration fees and Insurance
            Specify: Brand, model
            Notes: New item in the regional list'),
            array('pcode' => '1107121130','pname' => 'Motorcycle, HONDA, NC 750 X [1 Piece]','pspecs' => 'Motorcycle, HONDA NC 750 X
            Preferred quantity: 1 Piece
            Brand: Honda
            Model: CB 650 F
            Type: Bare (naked) motorcycle
            Engine displacement: 600 cc
            Engine output: 64 kW (87 hp)
            Frame type: Mono backbone, steel tube
            Cooling: Liquid
            Cylinders: 4
            Stroke: 4
            Starter: Electric
            Gears: 6-speed
            Front brake: Dual disc
            Rear brake: Single disc
            Front suspension: Inverted telescopic fork
            Rear suspension: Monoshock damper with adjustable preload
            Exclude: Registration fees and Insurance
            Notes: New item'),
            array('pcode' => '1107121140','pname' => 'Motorcycle, HONDA, Supra GTR 150 [1 Piece]','pspecs' => 'Motorcycle, HONDA, Supra GTR 150
            Preferred quantity: 1 Piece
            Brand: Honda
            Model: Supra GTR 150
            Type: Scooter
            Engine displacement: 150 cc
            Engine output: 11.5 kW
            Frame type: Underbone
            Cooling: Liquid
            Cylinders: 1
            Stroke: 4-stroke, 4-valve
            Starter: Electric
            Gears: Manual 6-Speed Constant Mesh
            Front brake: Hydraulic Disc
            Rear brake: Hydraulic Disc
            Front suspension: Telescopic
            Rear suspension: Swing Arm - Monoshock
            Exclude: Registration fees and Insurance
            Notes: New item'),
            array('pcode' => '1107131010','pname' => 'Bicycle, basic, 1 gear system [1 Piece]','pspecs' => 'Bicycle, basic, 1 gear system
            Preferred quantity: 1 Piece
            Type: Normal street bicycle
            Dimension of wheels: Wheels
            Frame materials: Steel
            Number of gears: 1
            Brakes: Caliper brake (hand brakes)
            Handlebar style: Tourist'),
            array('pcode' => '1107131020','pname' => 'Bicycle, basic, 7-8 derailleur (external) gear, WKB [1 Piece]','pspecs' => 'Bicycle, basic, 7-8 derailleur (external) gear, WKB
            Brand: Well known
            Preferred quantity: 1 Piece
            Type: Normal street bike
            Dimension of wheels: 24-28 inches
            Frame materials: Aluminum
            Gear system: Derailleur (externally) gears (Shimano; Nexus)
            Number of gears: 7-8
            Brakes: Caliper brake (hand brakes)
            Handlebar style: Tourist
            Equipment: Mud guards, chain guard, carrier, light
            Specify: Brand'),
            array('pcode' => '1107131030','pname' => 'Bicycle, basic, commuter, WKB [1 Piece]','pspecs' => 'Bicycle, basic, commuter, WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Basic gearless commuter bicycle
            Dimension of wheels: 26 -28 inches (66-71 cm)
            Frame materials: Steel
            Gear system: No gears
            Number of gears: 0
            Brakes: Rim brakes and/or pedal brake
            Handlebar style: Tourist (commuter)
            Equipment: Mudguards, chain guard
            Specify: Brand, model'),
            array('pcode' => '1107131040','pname' => 'Bicycle, children\'s, 45-64cm wheel, with single gear, WKB [1 Piece]','pspecs' => 'Bicycle, children\'s, 45-64cm wheel, with single gear, WKB
            Brand: Well known
            Preferred quantity: 1 Piece
            Type: Children\'s bike - bicycle for youngster (10 - 12 years), brand new
            Dimension of wheels: 45 - 64 cm (18 - 25 Inches)
            Frame materials: Aluminum
            Number of gears: 1 (external)
            Brakes: V-brakes
            Equipment: Mudguards, chain guard, carrier, light
            Specify: Brand'),
            array('pcode' => '1107131050','pname' => 'Bicycle, children\'s, BL [1 Piece]','pspecs' => 'Bicycle, children\'s, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Children\'s bicycle (10 - 12 years)
            Dimension of wheels: 14-16 inches (35-40 cm)
            Frame materials: Steel
            Gear system: No gears
            Number of gears: 0
            Brakes: Rim brakes and/or pedal brake
            Equipment: Mudguards, chain guard, 2 supporting wheels
            Specify: Label, if any'),
            array('pcode' => '1107131060','pname' => 'Bicycle, hybrid, WKB [1 Piece]','pspecs' => 'Bicycle, hybrid, WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Hybrid bicycle (combination of commuter and mountain bicycle)
            Dimension of wheels: 26 -28 inches (66-71 cm)
            Frame materials: Aluminum
            Gear system: Shimano with Altus rear mechanism
            Number of gears: 21 - 24
            Brakes: V-brakes or mechanic disc brakes
            Handlebar style: Tourist (commuter)
            Equipment: No
            Exclude: Bikes with high-end shimano gears, suspension, street equipment
            Specify: Brand, model'),
            array('pcode' => '1107221010','pname' => 'Diesel fuel, normal, WKB [1 Liter]','pspecs' => 'Diesel fuel, normal, WKB
            Brand: Well Known
            Preferred quantity: 1 Liter
            Type: Petroleum diesel (petrodiesel), used in diesel engines for cars, from automatic pump
            Exclude: Synthetic diesel, biodiesel, improved formula diesels
            Specify: Name of gas station'),
            array('pcode' => '1107221020','pname' => 'Motor Oil, Fully Synthetic, Shell Helix Ultra, 0W-40 [4 Liter]','pspecs' => 'Motor Oil, Fully Synthetic, Shell Helix Ultra, 0W-40
            Brand: Shell Helix Ultra
            Preferred quantity: 4 Liter
            Type: Fully Synthetic oil
            Viscosity: 0w-40
            Packaging: Tin; plastic bottle'),
            array('pcode' => '1107221030','pname' => 'Motor Oil, Mineral Synthetic Blend, WKB, 15w-40 [4 Liter]','pspecs' => 'Motor Oil, Mineral Synthetic Blend, WKB, 15w-40
            Brand: Shell Helix Super
            Preferred quantity: 4 Liter
            Type: Blend synthetic & mineral Oil
            Viscosity: 15w-40, Multi-Grade
            Packaging: Tin; plastic bottle
            Specify: Brand'),
            array('pcode' => '1107221040','pname' => 'Motor Oil, Mineral-based, WKB, 10w-40 [4 Liter]','pspecs' => 'Motor Oil, Mineral-based, WKB, 10w-40
            Brand: Well Known
            Preferred quantity: 4 Liter
            Type: Mineral Oil
            Viscosity: 10w-40, multi-grade
            Packaging: Tin; plastic bottle
            Specify: Brand'),
            array('pcode' => '1107221050','pname' => 'Motor Oil, Mineral-based, WKB, 20w-40 [4 Liter]','pspecs' => 'Motor Oil, Mineral-based, WKB, 20w-40
            Brand: Well Known
            Preferred quantity: 4 Liter
            Type: Mineral oil
            Viscosity: 20w-40, multi-grade
            Packaging: Tin; plastic bottle
            Specify: Brand'),
            array('pcode' => '1107221060','pname' => 'Motor Oil, Synthetic-based, Shell Helix Ultra Premium, 5w-40 [4 Liter]','pspecs' => 'Motor Oil, Synthetic-based, Shell Helix Ultra Premium, 5w-40
            Brand: Shell Helix Ultra Premium
            Preferred quantity: 4 Liter
            Type: Synthetic oil
            Viscosity: 5w-40, multi-grade
            Packaging: Tin; plastic bottle'),
            array('pcode' => '1107221070','pname' => 'Petrol, 85-90 octane, WKB [1 Liter]','pspecs' => 'Petrol, 85-90 octane, WKB
            Brand: Well Known
            Preferred quantity: 1 Liter
            Type: Unleaded, national brand
            Octane: 85-90
            Exclude: Street sale
            Specify: Brand'),
            array('pcode' => '1107221080','pname' => 'Petrol, 91-92 octane, WKB [1 Liter]','pspecs' => 'Petrol, 91-92 octane, WKB
            Brand: Well Known
            Preferred quantity: 1 Liter
            Type: Unleaded, from automatic pump
            Octane: Closest to 91-92 oct.
            Exclude: Street Sale
            Specify: Name of gas station'),
            array('pcode' => '1107221090','pname' => 'Petrol, 97-98 octane, WKB [1 Liter]','pspecs' => 'Petrol, 97-98 octane, WKB
            Brand: Well Known
            Preferred quantity: 1 Liter
            Type: Unleaded, superplus, from automatic pump
            Octane: Closest to 97-98 oct
            Exclude: Street Sale
            Specify: Name of gas station'),
            array('pcode' => '1107231010','pname' => 'Car battery, 12V, BOSCH S4 [1 Piece]','pspecs' => 'Car battery, 12V, BOSCH S4
            Brand: BOSCH
            Model: S4
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Car battery, ETN number 560 408 054 (Short Code
            Capacity: 12V 50-60 Ah
            Charged: Yes
            Maintenance: Free
            Price excludes: Installation costs'),
            array('pcode' => '1107231020','pname' => 'Car Battery, Honda Civic, or Toyota Corolla Altis, 12V [1 Piece]','pspecs' => 'Car Battery, Honda Civic, or Toyota Corolla Altis, 12V
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Car battery
            Capacity: 12V 40-45 Ah
            Charged: Yes
            Maintenance: Sealed
            Price excludes: Installation costs'),
            array('pcode' => '1107231030','pname' => 'Car Battery, Maruti/Suzuki, 12V [1 Piece]','pspecs' => 'Car Battery, Maruti/Suzuki, 12V
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Car battery
            Capacity: 12V 40-45 Ah
            Charged: Yes
            Maintenance: Sealed
            Price excludes: Installation costs'),
            array('pcode' => '1107231040','pname' => 'Clutch repair, total cost, BNR [1 Service]','pspecs' => 'Clutch repair, total cost, BNR
            Preferred quantity: 1
            Quantity range: 1 Service
            Type: Replacement of linings on clutch disc
            Car type: Hatchback five-seat car (such as VW Golf, Mazda 3, Honda Civic)
            Outlet type: General mechanic, not licensed
            Price includes: Labor costs (charge for total time), materials and spare parts
            Specify: Car brand and model'),
            array('pcode' => '1107231050','pname' => 'New Radial Tires 145/80 R12, WKB [1 Piece]','pspecs' => 'New Radial Tires 145/80 R12, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: New
            Price includes: Mounting, balancing, tire valves
            Specify: Brand'),
            array('pcode' => '1107231060','pname' => 'New Radial Tires 185/55 R15, WKB [1 Piece]','pspecs' => 'New Radial Tires 185/55 R15, WKB
            Brand: Well known
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: New
            Price includes: Mounting, balancing, tire valves
            Specify: Brand'),
            array('pcode' => '1107231070','pname' => 'Replacement of 2 brake pads, BNR [1 Service]','pspecs' => 'Replacement of 2 brake pads, BNR
            Preferred quantity: 1
            Quantity range: 1 Service
            Type: Replacement of brake pads on 2 front wheels
            Car type: Hatchback five-seat car (such as VW Golf, Mazda 3, Honda Civic)
            Outlet type: Licensed (authorized) garage or dealer
            Number of pieces: 2
            Price includes: Labor costs (charge for total time), materials and spare parts
            Specify: Car brand and model'),
            array('pcode' => '1107231080','pname' => 'Spark plug, 1500cc engine, WKB [4 Piece]','pspecs' => 'Spark plug, 1500cc engine, WKB
            Brand: Well Known
            Preferred quantity: 4
            Quantity range: 4 Piece
            Type: Spark plug, for 1500 cc engine
            Number of pieces: 4
            Price excludes: Installation costs
            Specify: Brand. model, number of units in package'),
            array('pcode' => '1107231090','pname' => 'Spark Plugs, 800 cc engine, WKB [3 Piece]','pspecs' => 'Spark Plugs, 800 cc engine, WKB
            Brand: Well known
            Preferred quantity: 3
            Quantity range: 3 Piece
            Type: Resistor
            Car type: Maruti Suzuki
            Number of pieces: 3
            Specify: Brand'),
            array('pcode' => '1107231100','pname' => 'Starter Motor Replacement, Honda or Toyota 1500 cc engine [1 Service]','pspecs' => 'Starter Motor Replacement, Honda or Toyota 1500 cc engine
            Brand: Honda or Toyota
            Preferred quantity: 1
            Quantity range: 1 Service
            Type: Replacement of starter motor with integrated solenoid
            Outlet type: General mechanic; authorized service center
            Price includes: Labor and materials
            Specify: Brand'),
            array('pcode' => '1107231110','pname' => 'Tire repair, total cost, BNR [1 Service]','pspecs' => 'Tire repair, total cost, BNR
            Preferred quantity: 1
            Quantity range: 1 Service
            Type: Tire repair; with removal of wheel by outlet; cold, self vulcanizing tire plug
            Tire type: Radial
            Outlet type: General mechanic, not licensed
            Number of pieces: 1
            Price includes: Labor costs (charge for total time), materials and spare parts
            Price excludes: Inner tube and valve body'),
            array('pcode' => '1107231120','pname' => 'Replacement of 4 tires, service only, BNR [1 Service]','pspecs' => 'Replacement of 4 tires, service only, BNR
            Brand Type: Well Known
            Model: (S)
            Preferred quantity: 1
            Quantity range: 1 Service
            Type: Replacement service of 4 tires
            Tire type: 185/65 R14 or 185/65 R15, radial, two plies
            Number of pieces: 4
            Price includes: Price of changing old tires, fitting on rims, balancing and cost for recycling of the old tires (where mandatory)
            Exclude: Price of tires and any other materials
            Specify: Brand, model
            Notes: New item'),
            array('pcode' => '1107241010','pname' => 'Car hire, 1 day, unlimited mileage, WKB [1 Day]','pspecs' => 'Car hire, 1 day, unlimited mileage, WKB
            Brand: Well Known
            Preferred quantity: 1 Day
            Type: Economy car hire
            Car type: Small 1100-1300 cc (1.1-1.3 liter engine size) cars (such as
            Duration: 1 days
            Mileage: Unlimited
            Location: Hired in the city (not airport or railway station) - returning to point of departure
            Insurance: CDW (collision damage waiver), TP (theft protection)
            Exclude: Services by AVIS or HERTZ; PAI (personal insurance), all risks insurance, special rates, payment via internet
            Specify: Name of company, car brand and model'),
            array('pcode' => '1107241020','pname' => 'Car hire, 7 days, unlimited mileage, AVIS or HERTZ [7 Day]','pspecs' => 'Car hire, 7 days, unlimited mileage, AVIS or HERTZ
            Brand: AVIS or HERTZ
            Preferred quantity: 7 Day
            Type: Economy car hire
            Car type: Small 1100-1300 cc (1.1-1.3 liter engine size) cars (such as
            Duration: 7 days
            Mileage: Unlimited
            Location: Hired in the city (not airport or railway station) - returning to point of departure
            Insurance: CDW (collision damage waiver), TP (theft protection)
            Exclude: PAI (personal insurance), all risks insurance, special rates, payment via internet
            Specify: Name of company, car brand and model'),
            array('pcode' => '1107241030','pname' => 'Car parking fee, Hourly [1 Service]','pspecs' => 'Car parking fee, Hourly
            Preferred quantity: 1 Service
            Type: Parking space, not connected with dwelling
            Car type: Sedan or SUV
            Duration: 1 hour
            Location: In city, covered area
            Exclude: Overnight parking, reserved parking space, public owned'),
            array('pcode' => '1107241040','pname' => 'Carwash services [1 Service]','pspecs' => 'Carwash services
            Preferred quantity: 1 Service
            Type: Regular shampoo, wash and vacuum by attendants from a typical carwash provider
            Car type: Medium size (approximately 1600cc)
            Duration: 0.5-1.5 hrs.
            Location: In city, covered area
            Exclude: Automatic and Self-service car wash, Carwash with wax'),
            array('pcode' => '1107241050','pname' => 'Driving school, BNR [60 Minute]','pspecs' => 'Driving school, BNR
            Preferred quantity: 60 Minute
            Type: Practical driving lesson to prepare for driving test (for driving license of passenger car)
            Car type: Small passenger car, with manual gearbox
            Duration: 40-90 minutes, Wednesday, working hours
            Location: In the city
            Insurance: Not included
            Exclude: Packages, licensing fees
            Specify: Length of the lesson'),
            array('pcode' => '1107241060','pname' => 'Motor cycle wash services [1 Service]','pspecs' => 'Motor cycle wash services
            Preferred quantity: 1 Service
            Type: Regular shampoo, wash and vacuum by attendants from a typical motor cycle wash provider
            Car type: Regular motor cycle (small, such as Honda Wave)
            Duration: 0.5-1.5 hrs
            Location: In city, covered area
            Exclude: Automatic and Self-service motor car wash'),
            array('pcode' => '1107311010','pname' => 'Intercity train, single ticket, 50 km [1 Ticket]','pspecs' => 'Intercity train, single ticket, 50 km
            Preferred quantity: 1 Ticket
            Transportation Type: Passenger train
            Ticket type: One way fare, for adult passenger; domestic trip
            Distance: Approx. 50 km
            Time: Wednesday
            Class: 2nd ("regular" if rating does not exist)
            Starting point: Survey city
            Validity: 1 day
            Price includes:
            Exclude: Special discounts; special trains with supplements; High speed trains'),
            array('pcode' => '1107311020','pname' => 'Intercity train, single ticket, 150 km [1 Ticket]','pspecs' => 'Intercity train, single ticket, 150 km
            Preferred quantity: 1 Ticket
            Transportation Type: Passenger train
            Ticket type: One way fare, for adult passenger; domestic trip
            Distance: Approx. 150 km
            Time: Wednesday
            Class: 2nd ("regular" if rating does not exist)
            Starting point: Survey city
            Validity: 1 day
            Price includes:
            Exclude: Special discounts; special trains with supplements'),
            array('pcode' => '1107311030','pname' => 'Intercity train, single ticket, 250 km [1 Ticket]','pspecs' => 'Intercity train, single ticket, 250 km
            Preferred quantity: 1 Ticket
            Transportation Type: Passenger train
            Ticket type: One way fare, for adult passenger; domestic trip
            Distance: Approx. 250 km
            Time: Wednesday
            Class: 2nd ("regular" if rating does not exist)
            Starting point: Survey city
            Validity: 1 day
            Price includes:
            Exclude: Special discounts; special trains with supplements; High speed trains'),
            array('pcode' => '1107311040','pname' => 'Intercity train, single ticket, 500 km [1 Ticket]','pspecs' => 'Intercity train, single ticket, 500 km
            Preferred quantity: 1 Ticket
            Ticket type: One way adult/full fare, second Class (air conditioned)
            Distance: Close to 500 km
            Class: Second class
            Price includes:
            Exclude: Food not included in fare; High speed trains'),
            array('pcode' => '1107311050','pname' => 'Intercity train, single ticket, child train fare, 200 km [1 Ticket]','pspecs' => 'Intercity train, single ticket, child train fare, 200 km
            Preferred quantity: 1 Ticket
            Ticket type: One way fare, for children (aged 2-11) passenger
            Distance: 150 km to 200 km
            Class: Air conditioned (first class)
            Price includes:
            Exclude: Food; High speed trains'),
            array('pcode' => '1107311060','pname' => 'Urban train, tram or metro, single ticket [1 Ticket]','pspecs' => 'Urban train, tram or metro, single ticket
            Preferred quantity: 1 Ticket
            Transportation Type: Train, tram or metro
            Ticket type: Single adult passenger one way, change allowed; domestic trip
            Distance: Any distance traveled within the same city
            Validity: 1 trip
            Price includes:
            Exclude: Special discounts; daily tickets; special trains with supplements; High speed trains'),
            array('pcode' => '1107311070','pname' => 'Train, high-speed train, single ticket, bought approx. 10 days in advance, approx. 300 km [1 Ticket]','pspecs' => 'Train, high-speed train, single ticket, bought approx. 10 days in advance, approx. 300 km
            Preferred quantity: 1 Ticket
            Transportation Type: High speed train
            Ticket type: One way fare, for adult passenger; domestic trip; bought in advance (approx. 10 days)
            Distance: Approx. 300 km
            Time: Working day (Mon - Thu), nearest available to midday
            Class: 2nd ("regular/standard" if not rated)
            Speed: 250-350km/h
            Starting point: Survey city
            Validity: For the booked train only
            Price includes: Seat reservation (if available)
            Exclude: Reduced tickets, tickets bought with rail card
            Specify: Name of railway line; Average train speed'),
            array('pcode' => '1107321010','pname' => 'Intercity bus, single ticket, 50 km [1 Ticket]','pspecs' => 'Intercity bus, single ticket, 50 km
            Preferred quantity: 1 Ticket
            Transportation Type: Urban bus
            Ticket type: One way fare, for adult passenger
            Distance: Approx. 50 km
            Time: Working day
            Starting point: Survey city center
            Exclude: Price reductions (such as discount or special offer only for best customers)'),
            array('pcode' => '1107321020','pname' => 'Intercity bus, single ticket, 150 km [1 Ticket]','pspecs' => 'Intercity bus, single ticket, 150 km
            Preferred quantity: 1 Ticket
            Transportation Type: Urban bus
            Ticket type: One way fare, for adult passenger
            Distance: Approx. 150 km
            Time: Working day
            Starting point: Survey city center
            Exclude: Price reductions (such as discount or special offer only for best customers)'),
            array('pcode' => '1107321030','pname' => 'Intercity bus, single ticket, 250 km [1 Ticket]','pspecs' => 'Intercity bus, single ticket, 250 km
            Preferred quantity: 1 Ticket
            Transportation Type: Urban bus
            Ticket type: One way fare, for adult passenger
            Distance: Approx. 250 km
            Time: Working day
            Starting point: Survey city center
            Exclude: Price reductions (such as discount or special offer only for best customers)'),
            array('pcode' => '1107321040','pname' => 'Intra-city adult bus fare, air conditioned [1 Ticket]','pspecs' => 'Intra-city adult bus fare, air conditioned
            Preferred quantity: 1 Ticket
            Transportation Type: Bus
            Ticket type: Regular, single full fare ticket, adult passenger
            Distance: Minimum fare for a distance of less than 7 kilometers
            Specify: Minimum distance for the minimum fare'),
            array('pcode' => '1107321050','pname' => 'Intra-city adult bus fare, not air conditioned [1 Ticket]','pspecs' => 'Intra-city adult bus fare, not air conditioned
            Preferred quantity: 1 Ticket
            Transportation Type: Bus
            Ticket type: Regular, single full fare ticket, adult passenger
            Distance: Minimum fare for a distance of less than 7 kilometers
            Specify: Minimum distance for the minimum fare'),
            array('pcode' => '1107321060','pname' => 'Mini bus (urban) [1 Ticket]','pspecs' => 'Mini bus (urban)
            Preferred quantity: 1 Ticket
            Transportation Type: Minibus
            Ticket type: One way fare, for adult passenger
            Distance: Any distance traveled within the same city
            Time: Working day
            Starting point: Survey city center
            Exclude: Special discounts; daily tickets; special buses (night bus, aerobus, touristic bus)'),
            array('pcode' => '1107321070','pname' => 'Suburban bus, single ticket, 30 km [1 Ticket]','pspecs' => 'Suburban bus, single ticket, 30 km
            Preferred quantity: 1 Ticket
            Transportation Type: Urban bus
            Ticket type: One way fare, for adult passenger
            Distance: Approx. 30 km
            Time: Working day
            Starting point: Survey city center
            Exclude: Price reductions (such as discount or special offer only for best customers)'),
            array('pcode' => '1107321080','pname' => 'Taxi fare, air conditioned [1 Service]','pspecs' => 'Taxi fare, air conditioned
            Preferred quantity: 1 Service
            Transportation Type: Taxi
            Ticket type: Single ride
            Distance: 7 km in the city center
            Time: Working day, 3 p.m.
            Starting point: Survey city center
            Price includes: Potentially fixed starting fee, price per km
            Exclude: Taxi called by telephone or phone application, requested break in journey, luggage'),
            array('pcode' => '1107321090','pname' => 'Taxi fare, not air conditioned [1 Service]','pspecs' => 'Taxi fare, not air conditioned
            Preferred quantity: 1 Service
            Transportation Type: Car, not air conditioned
            Ticket type: Single ride
            Distance: 7-10 km
            Time: Working day, 3 p.m.
            Starting point: Survey city center
            Price includes: Typical basis, per kilometer price
            Exclude: Taxi called by telephone or phone application, requested break in journey, luggage'),
            array('pcode' => '1107321100','pname' => 'Ridesharing taxi, Uber or equivalent [1 Service]','pspecs' => 'Ridesharing taxi, Uber or equivalent
            Preferred quantity: 1 Service
            Transportation Type: Ridesharing (unlicensed) taxi, called via app such as Uber
            Distance: 7 km in the city center
            Time: Working day, 3 p.m.
            Starting point: Survey city center
            Price includes: Potentially fixed starting fee, price per km
            Exclude: Licensed taxis, larger or more luxurious vehicles, luggage
            Notes: New item'),
            array('pcode' => '1107331010','pname' => 'Flight, domestic, return ticket, close to 300 km, for child [1 Ticket]','pspecs' => 'Flight, domestic, return ticket, close to 300 km, for child
            Preferred quantity: 1 Ticket
            Type: Scheduled service
            Ticket type: Round trip fare
            Distance (approximate): Close to 250-350 km (per way)
            Class: Economy; lowest class available for children (aged 2-11 years old)
            Specify: Actual distance observed in Kilometers
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331020','pname' => 'Flight, domestic, return ticket, 500-800km [1 Ticket]','pspecs' => 'Flight, domestic, return ticket, 500-800km
            Preferred quantity: 1 Ticket
            Type: Domestic flight, round trip
            Ticket type: Return ticket; not changeable after issue; not refundable
            Starting point: Major airport of the country
            Destination: Most popular domestic destination
            Distance: 500-800 km
            Class: Economy class fare for adult passenger
            Departure date: Low season
            Issued before departure: 42 - 56 days
            Payment: When issued
            Luggage: Cabin luggage only
            Price includes: All additional taxes, fees, surcharges and charges included in the ticket e.g. departure tax, passenger service charge, fuel surcharge
            Purchasing place: Airlines\' website
            Exclude: Price reductions (discounts or special offers), charter carriers
            Specify: Destination, distance in km, airline, date of departure
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331030','pname' => 'Flight, domestic, return ticket, budget fare, close to 300 km, low cost airline [1 Ticket]','pspecs' => 'Flight, domestic, return ticket, budget fare, close to 300 km, low cost airline
            Preferred quantity: 1 Ticket
            Type: Scheduled service
            Ticket type: Round trip fare
            Distance (approximate): Close to 250-350 km (per way)
            Class: Economy; budget fare for adult (aged 12 years and above)
            Specify: Actual distance observed in kilometers
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331040','pname' => 'Flight, domestic, return ticket, 200-400km [1 Ticket]','pspecs' => 'Flight, domestic, return ticket, 200-400km
            Quantity: 1 Ticket
            Unit of measurement: Ticket
            Type: Domestic flight, round trip
            Ticket type: Return ticket; not changeable after issue; not refundable
            Starting point: Major airport of the country
            Destination: Most popular domestic destination (S)
            Distance (approximate): Close to 250-350 km (per way)
            Class: Economy; lowest class available for adult (aged 12 years old and above)
            Departure date: Low season
            Issued before departure: 42-56 days
            Payment: When issued
            Luggage: Cabin luggage only
            Price includes: All additional taxes, fees, surcharges and charges included in the ticket e.g. departure tax, passenger service charge, fuel surcharge
            Purchasing place: Airlines\' website
            Exclude: Price reductions (discounts or special offers), charter carriers
            Specify: Actual distance observed in Kilometers, destination
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331050','pname' => 'Flight, international, return ticket, 800-1200km [1 Ticket]','pspecs' => 'Flight, international, return ticket, 800-1200km
            Preferred quantity: 1 Ticket
            Type: International flight, round trip
            Ticket type: Return ticket; not changeable after issue; not refundable
            Starting point: Major airport of the country
            Destination: Most popular international destination
            Distance: 800-1200 km, non-stop
            Class: Economy class fare for adult passenger
            Departure date: Low season
            Issued before departure: 42 - 56 days
            Payment: When issued
            Luggage: 1 or 2 pieces (checked luggage)
            Price includes: All additional taxes, fees, surcharges and charges included in the ticket e.g. departure tax, passenger service charge, fuel surcharge
            Purchasing place: Airlines\' website
            Exclude: Price reductions (discounts or special offers), charter carriers
            Specify: Destination, distance in km, airline, date of departure
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331060','pname' => 'Flight, international, return ticket, 3000-5000km [1 Ticket]','pspecs' => 'Flight, international, return ticket, 3000-5000km
            Preferred quantity: 1 Ticket
            Type: International flight, round trip
            Ticket type: Return ticket; not changeable after issue; not refundable
            Starting point: Major airport of the country
            Destination: Most popular international destination
            Distance: 3000-5000 km
            Class: Economy class fare for adult passenger
            Departure date: Low season
            Issued before departure: 42 - 56 days
            Payment: When issued
            Luggage: 1 or 2 pieces (checked luggage)
            Price includes: All additional taxes, fees, surcharges and charges included in the ticket e.g. departure tax, passenger service charge, fuel surcharge
            Purchasing place: Airlines\' website
            Exclude: Price reductions (discounts or special offers), charter carriers
            Specify: Destination, distance in km, airline, date of departure
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331070','pname' => 'Flight, international, return ticket, 6000-8000km [1 Ticket]','pspecs' => 'Flight, international, return ticket, 6000-8000km
            Preferred quantity: 1 Ticket
            Type: International flight, round trip
            Ticket type: Return ticket; not changeable after issue; not refundable
            Starting point: Major airport of the country
            Destination: Most popular international destination
            Distance: 6000-8000 km
            Class: Economy class fare for adult passenger
            Departure date: Low season
            Issued before departure: 42 - 56 days
            Payment: When issued
            Luggage: 1 or 2 pieces (checked luggage)
            Price includes: All additional taxes, fees, surcharges and charges included in the ticket e.g. departure tax, passenger service charge, fuel surcharge
            Purchasing place: Airlines\' website
            Exclude: Price reductions (discounts or special offers), charter carriers
            Specify: Destination, distance in km, airline, date of departure
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331080','pname' => 'Flight, international, return ticket, discount economy, close 1,000 km [1 Ticket]','pspecs' => 'Flight, international, return ticket, discount economy, close 1,000 km
            Preferred quantity: 1 Ticket
            Type: Scheduled service
            Ticket type: Round trip fare
            Distance (approximate): close to 1,000 kilometers (per way)
            Class: Economy (lowest class); for adult (aged 12 years old and above)
            Issued before departure: Price of ticket purchased two weeks prior to scheduled flight
            Specify: Actual distance observed in Kilometers
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331090','pname' => 'Flight, international, return ticket, budget fare, 10,000 km, low cost airline [1 Ticket]','pspecs' => 'Flight, international, return ticket, budget fare, 10,000 km, low cost airline
            Preferred quantity: 1 Ticket
            Type: Scheduled service
            Ticket type: Round trip fare
            Distance (approximate): Most direct flight with a distance of close to 10,000 km (per way) from capital city
            Class: Economy; budget fare for adult (aged 12 years and above)
            Issued before departure: Price of ticket purchased two months prior to scheduled flight
            Specify: Actual distance observed in kilometers
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331100','pname' => 'Flight, international, return ticket, discount economy, close to 10,000 km [1 Ticket]','pspecs' => 'Flight, international, return ticket, discount economy, close to 10,000 km
            Preferred quantity: 1 Ticket
            Type: Scheduled service
            Ticket type: Round trip fare
            Distance (approximate): Most direct flight with a distance of close to 10,000 km (per way) from capital city
            Class: Economy (lowest class); for adult (aged 12 years old and above)
            Issued before departure: Price of ticket purchased two weeks prior to scheduled flight
            Specify: Actual distance observed in Kilometers
            Note: Distance refers to flight distance'),
            array('pcode' => '1107331110','pname' => 'Flight, international, return ticket, 500-800km [1 Ticket]','pspecs' => 'Flight, international, return ticket, 500-800km
            Preferred quantity: 1 Ticket
            Type: International flight, round trip
            Ticket type: Return ticket; not changeable after issue; not refundable
            Starting point: Major airport of the country
            Destination: Most popular domestic destination (S)
            Distance: 500-800 km (S)
            Class: Economy class fare for adult passenger
            Departure date: Low season
            Issued before departure: 42 - 56 days
            Payment: When issued
            Luggage: Cabin luggage only
            Price includes: All additional taxes, fees, surcharges and charges included in the ticket e.g. departure tax, passenger service charge, fuel surcharge
            Purchasing place: Airlines\' website
            Exclude: Price reductions (discounts or special offers), charter carriers
            Specify: Destination, distance in km, airline, date of departure, airline
            Notes: New item'),
            array('pcode' => '1107341010','pname' => 'Fast craft service, close to 50km [1 Ticket]','pspecs' => 'Fast craft service, close to 50km
            Preferred quantity: 1 Ticket
            Type of trip: One-way, sea or river
            Additional bedding units: No, seat only
            Time: Weekdays, non-public holiday
            Bath facilities: Public toilet
            Class of Service: Air-conditioned
            Type of Passenger: Adult/Full Fare
            Typical distance: 40-100 km journey
            Specify: Actual distance observed in kilometers'),
            array('pcode' => '1107341020','pname' => 'Fast craft service, close to 200km [1 Ticket]','pspecs' => 'Fast craft service, close to 200km
            Preferred quantity: 1 Ticket
            Type of trip: One-way, sea or river, scheduled service
            Additional bedding units: No, seat only
            Time: Weekdays, non-public holiday
            Bath facilities: No
            Class of Service: Air-conditioned
            Type of Passenger: Adult/Full Fare
            Typical distance: 150-250 km journey
            Specify: Actual distance observed in kilometers'),
            array('pcode' => '1107341030','pname' => 'Ship Passage - close to 200 km [1 Ticket]','pspecs' => 'Ship Passage - close to 200 km
            Preferred quantity: 1 Ticket
            Origin: Typical source
            Type of trip: Scheduled Service
            Additional Bedding Units: No beds provided
            Waterway: Sea; River
            Bath Facilities: Public toilet
            Class of Service: Not air-conditioned
            Type of Passenger: Adult/Full Fare
            Typical distance: Close to 200 km but greater than 100 km (one-way)
            Specify: Actual distance observed in kilometers'),
            array('pcode' => '1107341040','pname' => 'Short water journey, close to 15km [1 Ticket]','pspecs' => 'Short water journey, close to 15km
            Preferred quantity: 1 Ticket
            Type of trip: One-way, inland waterway
            Additional bedding units: No, seat only
            Time: Weekdays, non-public holiday
            Bath facilities: No
            Class of Service: Not air-conditioned/Ordinary
            Type of Passenger: Adult/Full Fare
            Typical distance: 10-25 km journey
            Specify: Actual distance observed in kilometers'),
            array('pcode' => '1107361010','pname' => 'Freight charge [10 Kilogram]','pspecs' => 'Freight charge
            Preferred quantity: 10
            Quantity range: 8 - 12 Kilogram
            Origin: Typical source
            Type of Service: Freight Services included in base price
            Fee Basis: By quotation
            Type of Freight: Freight by any local courier service
            Distance: Within 10km'),
            array('pcode' => '1107361020','pname' => 'Moving and freight charge combination, 300km [2500 Kilogram]','pspecs' => 'Moving and freight charge combination, 300km
            Preferred quantity: 2500
            Quantity range: 2000 - 3000 Kilogram
            Items included: Household furnitures
            Origin: Typical source
            Type of Service: Combination moving and freight
            Services included in base price: Insurance; Pre-cost estimate; Pick-up and delivery; Packing of containers; Unpacking at destination; Loading and unloading of trailer; Storage in-transit
            Fee Basis: By quotation
            Type of Freight: Freight by road using truck
            Condition of Road: Good (asphalt/cement)
            Distance: about 300 km'),
            array('pcode' => '1108111010','pname' => 'Postage of a letter, domestic [1 Service]','pspecs' => 'Postage of a letter, domestic
            Preferred quantity: 1 Service
            Type: Standard domestic postage of a letter
            Destination: National (domestic)
            Delivery: Up to 3 working days after postage
            Weight: Less than 20 g
            Exclude: Express delivery
            Note: There is no distinction between a National Postal Office (assumed to be public service provider here) and a private service provider. Should both exist in a country, these services should be priced as per their representativity and/or by taking a (weighed) average.'),
            array('pcode' => '1108111030','pname' => 'Postage of a parcel, domestic [1 Service]','pspecs' => 'Postage of a parcel, domestic
            Preferred quantity: 1 Service
            Type: Standard domestic postage of a parcel (package)
            Destination: National (domestic)
            Delivery: Up to 10 working days after postage
            Weight: 5 kg
            Size: Maximum 55 x 40 x 22 cm
            Exclude: Express delivery, price of ready-made box
            Note: There is no distinction between a National Postal Office (assumed to be public service provider here) and a private service provider. Should both exist in a country, these services should be priced as per their representativity and/or by taking a (weighed) average.'),
            array('pcode' => '1108111040','pname' => 'Postage of a parcel, international [1 Service]','pspecs' => 'Postage of a parcel, international
            Preferred quantity: 1 Service
            Type: Standard international postage of a parcel (package)
            Destination: USA
            Delivery: Up to 15 working days after postage
            Weight: 2 kg
            Size: Maximum 30 x 20 x 20 cm
            Exclude: Express delivery, price of ready-made box
            Note: There is no distinction between a National Postal Office (assumed to be public service provider here) and a private service provider. Should both exist in a country, these services should be priced as per their representativity and/or by taking a (weighed) average.'),
            array('pcode' => '1108211010','pname' => 'Basic Home Phone, other than Panasonic, WKB [1 Piece]','pspecs' => 'Basic Home Phone, other than Panasonic, WKB
            Brand: Well known other than Panasonic
            Model: Alcatel T26 (indicative)
            Preferred quantity: 1 Piece
            Type: Single line corded telephone
            Digital display: no
            Caller ID: no
            Speaker phone: no
            Specify: Brand and model
            Notes: Specifications updated'),
            array('pcode' => '1108211020','pname' => 'Basic Home Phone, Panasonic [1 Piece]','pspecs' => 'Basic Home Phone, Panasonic
            Brand: Panasonic
            Model: KX-TS500MX, KX-TS505MX
            Preferred quantity: 1 Piece
            Type: Single line corded telephone
            Digital display: no
            Caller ID: no
            Speaker phone: no
            Specify: Model
            Notes: Specifications updated'),
            array('pcode' => '1108211030','pname' => 'Digital Cordless phone, other than Panasonic, WKB [1 Piece]','pspecs' => 'Digital Cordless phone, other than Panasonic, WKB
            Model: Alcatel E155 (indicative)
            Preferred quantity: 1 Piece
            Type: Cordless telephone with frequency of 2.4 GHz
            Digital display: yes
            Caller ID: yes with 50 names and number call logs
            Speaker phone: yes
            Specify: Brand and model
            Notes: Specifications updated'),
            array('pcode' => '1108211040','pname' => 'Digital Cordless phone, Panasonic [1 Piece]','pspecs' => 'Digital Cordless phone, Panasonic
            Brand: Panasonic
            Model: KX-TG3615BX, KX-TG3615SX
            Preferred quantity: 1 Piece
            Type: Cordless telephone with frequency of 2.4 GHz
            Digital display: yes
            Caller ID: yes with 50 names and number call logs
            Speaker phone: yes
            Specify: Model
            Notes: Specifications updated'),
            array('pcode' => '1108211050','pname' => 'Home Phone with Caller ID, other than Panasonic, WKB [1 Piece]','pspecs' => 'Home Phone with Caller ID, other than Panasonic, WKB
            Model: Alcatel T56, Alcatel T76 (indicative)
            Preferred quantity: 1 Piece
            Type: Single line corded telephone with caller ID
            Digital display: yes
            Caller ID: yes with 50 names and number call logs
            Speaker phone: no
            Specify: Brand and model
            Notes: Specifications updated'),
            array('pcode' => '1108211060','pname' => 'Home Phone with Caller ID, Panasonic [1 Piece]','pspecs' => 'Home Phone with Caller ID, Panasonic
            Brand: Panasonic
            Model: KX-TS880MX
            Preferred quantity: 1 Piece
            Type: Single line corded telephone with caller ID
            Digital display: yes
            Caller ID: yes with 50 names and number call logs
            Speaker phone: no
            Specify: Model
            Notes: Specifications updated'),
            array('pcode' => '1108211070','pname' => 'Smart phone, APPLE iPhone 15 [1 Piece]','pspecs' => 'Smart phone, APPLE iPhone 15
            Brand: Apple
            Model: iPhone 15 (S)
            Preferred quantity: 1 Piece
            Type: Smart phone
            Display size: 6.1"
            Connectivity: 5G
            Internal storage: 128 GB
            Primary camera resolution: 48 MP
            Dual sim: No
            Exclude: Pro, Pro Max, Plus
            Specify: Model
            Notes: Model updated'),
            array('pcode' => '1108211080','pname' => 'Smart phone, HUAWEI P60 Pro [1 Piece]','pspecs' => 'Smart phone, HUAWEI P60 Pro
            Brand: Huawei
            Model: P60 Pro (S)
            Preferred quantity: 1 Piece
            Type: Smart phone
            Display size: 6.67"
            Connectivity: 5G
            Internal storage: 256 GB
            Primary camera resolution: 48 MP
            Dual sim: No
            Exclude: P60 standard, P60 Art
            Specify: Model
            Notes: Model updated'),
            array('pcode' => '1108211100','pname' => 'Smart phone, SAMSUNG Galaxy A54 5G [1 Piece]','pspecs' => 'Smart phone, SAMSUNG Galaxy A54 5G
            Brand: Samsung
            Model: Galaxy A54 (S)
            Preferred quantity: 1 Piece
            Type: Smart phone
            Display size: 6.4"
            Connectivity: 5G
            Internal storage: 128 GB
            Primary camera resolution: 50 MP
            Dual sim: Yes
            Specify: Model
            Notes: Model updated'),
            array('pcode' => '1108211110','pname' => 'Smart phone, SAMSUNG Galaxy S23 [1 Piece]','pspecs' => 'Smart phone, SAMSUNG Galaxy S23
            Brand: Samsung
            Model: Galaxy S23 (S)
            Preferred quantity: 1 Piece
            Type: Smart phone
            Display size: 6.1"
            Connectivity: 5G
            Internal storage: 128 GB
            Primary camera resolution: 50 MP
            Dual sim: Yes
            Exclude: S23+, Ultra
            Specify: Model
            Notes: Model updated'),
            array('pcode' => '1108211120','pname' => 'Smart phone, XIAOMI Redmi 13 [1 Piece]','pspecs' => 'Smart phone, XIAOMI Redmi 13
            Brand: Xiaomi
            Model: Redmi 13 (S)
            Preferred quantity: 1 Piece
            Type: Smart phone
            Display size: 6.74"
            Connectivity: 5G
            Internal storage: 64 GB
            Primary camera resolution: 50 MP
            Dual sim: Yes
            Exclude: Mi models, Pro
            Specify: Model
            Notes: Model updated'),
            array('pcode' => '1108211130','pname' => 'Smart phone, HUAWEI nova 11i [1 Piece]','pspecs' => 'Smart phone, HUAWEI nova 11i
            Brand: Huawei
            Model: nova 11i (S)
            Preferred quantity: 1 Piece
            Type: Smart phone
            Display size: 6.8"
            Connectivity: 5G
            Internal storage: 128 GB
            Primary camera resolution: 48 MP
            Dual sim: No
            Exclude: nova 11 standard, nova 11 Pro
            Specify: Model
            Notes: New item'),
            array('pcode' => '1108211140','pname' => 'Smart phone, SAMSUNG Galaxy A14 5G [1 Piece]','pspecs' => 'Smart phone, SAMSUNG Galaxy A14 5G
            Brand: Samsung
            Model: Galaxy A14 (S)
            Preferred quantity: 1 Piece
            Type: Smart phone
            Display size: 6.6"
            Connectivity: 5G
            Internal storage: 64 GB
            Primary camera resolution: 50MP
            Dual sim: Yes
            Specify: Model
            Notes: New item'),
            array('pcode' => '1108311010','pname' => 'Fixed telephone line, monthly fee [1 Month]','pspecs' => 'Fixed telephone line, monthly fee
            Preferred quantity: 1 Month
            Service: Monthly basic fee for a fixed telephone line
            Line contract: Standard, private
            Line type: Traditional, e.g. plain old telephone service (POTS)
            Price excludes: First month of rental, charges of actual calls
            Exclude: ISDN line type services
            Specify: Provider name'),
            array('pcode' => '1108311020','pname' => 'Internet connection, 1 - 4 Mbps [1 Month]','pspecs' => 'Internet connection, 1 - 4 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, 1 - 4 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. TV-license, rent of modem, telephone charges)
            Specify: Provider name, bit rate (download), download limits (if issued), length of contract'),
            array('pcode' => '1108311030','pname' => 'Internet connection, 5 - 8 Mbps [1 Month]','pspecs' => 'Internet connection, 5 - 8 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, 5 - 8 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. TV-license, rent of modem, telephone charges)
            Specify: Provider name, bit rate (download), download limits (if issued), length of contract'),
            array('pcode' => '1108311040','pname' => 'Internet connection, 9 - 16 Mbps [1 Month]','pspecs' => 'Internet connection, 9 - 16 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, 9 - 16 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. TV-license, rent of modem, telephone charges)
            Specify: Provider name, bit rate (download), download limits (if issued), length of contract'),
            array('pcode' => '1108311050','pname' => 'Internet connection, 17 - 24 Mbps [1 Month]','pspecs' => 'Internet connection, 17 - 24 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, 17 - 24 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. TV-license, rent of modem, telephone charges)
            Specify: Provider name, bit rate (download), download limits (if issued), length of contract'),
            array('pcode' => '1108311060','pname' => 'Internet connection, 25 - 30 Mbps [1 Month]','pspecs' => 'Internet connection, 25 - 30 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, 25 - 30 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. TV-license, rent of modem, telephone charges)
            Specify: Provider name, bit rate (download), download limits (if issued), length of contract'),
            array('pcode' => '1108311070','pname' => 'Internet connection, 31 - 50 Mbps [1 Month]','pspecs' => 'Internet connection, 31 - 50 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, 31 - 50 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. TV-license, rent of modem, telephone charges)
            Specify: Provider name, bit rate (download), download limits (if issued), length of contract'),
            array('pcode' => '1108311080','pname' => 'Internet connection, 51 - 100 Mbps [1 Month]','pspecs' => 'Internet connection, 51 - 100 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, 51 - 100 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. TV-license, rent of modem, telephone charges)
            Specify: Provider name, bit rate (download), download limits (if issued), length of contract'),
            array('pcode' => '1108311090','pname' => 'Internet connection, 101 - 200 Mbps [1 Month]','pspecs' => 'Internet connection, 101 - 200 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, 101 - 200 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. TV-license, rent of modem, telephone charges)
            Specify: Provider name, bit rate (download), download limits (if issued), length of contract'),
            array('pcode' => '1108311100','pname' => 'Mobile monthly plan, 200 min., 200 SMS and 1 GB [1 Month]','pspecs' => 'Mobile monthly plan, 200 min., 200 SMS and 1 GB
            Preferred quantity: 1 Month
            Service: Monthly usage of calls, SMS and mobile internet
            Line type: GSM
            Duration: Closest to 200 minutes calling time, 200 text messages, closest to 1 GB data
            Price includes: All monthly fees for specified package
            Price excludes: Registration fees
            Exclude: International calls, contracts providing a mobile phone
            Specify: Provider name, monthly total usage, length of contract'),
            array('pcode' => '1108311110','pname' => 'Mobile monthly plan, 500 min., 500 SMS and 2 GB [1 Month]','pspecs' => 'Mobile monthly plan, 500 min., 500 SMS and 2 GB
            Preferred quantity: 1 Month
            Service: Monthly usage of calls, SMS and mobile internet
            Line type: GSM
            Duration: Closest to 500 minutes calling time, 500 text messages, closest to 2 GB data
            Price includes: All monthly fees for specified package
            Price excludes: Registration fees
            Exclude: International calls, contracts providing a mobile phone
            Specify: Provider name, monthly total usage, length of contract'),
            array('pcode' => '1108311120','pname' => 'Mobile monthly plan, 500 min., 500 SMS and no data [1 Month]','pspecs' => 'Mobile monthly plan, 500 min., 500 SMS and no data
            Preferred quantity: 1 Month
            Service: Monthly usage of calls, SMS
            Line type: GSM
            Duration: Closest to 500 min. calling time and closest to 500 SMSs, no data included
            Price includes: All monthly fees for specified package
            Price excludes: Registration fees
            Exclude: International calls, contracts providing a mobile phone or data
            Specify: Provider name, monthly total usage, length of contract'),
            array('pcode' => '1108311130','pname' => 'Mobile monthly plan, all unlimited [1 Month]','pspecs' => 'Mobile monthly plan, all unlimited
            Preferred quantity: 1 Month
            Service: Monthly usage of calls, SMS and mobile internet
            Line type: GSM
            Duration: Unlimited calling time, unlimited text messages, unlimited data (more than 10 GB)
            Price includes: All monthly fees for specified package
            Price excludes: Registration fees
            Exclude: International calls, contracts providing a mobile phone
            Specify: Provider name, monthly total usage, length of contract'),
            array('pcode' => '1108311140','pname' => 'Mobile monthly plan, unlimited call and text, 4 GB [1 Month]','pspecs' => 'Mobile monthly plan, unlimited call and text, 4 GB
            Preferred quantity: 1 Month
            Service: Monthly usage of calls, SMS and mobile internet
            Line type: GSM
            Duration: Unlimited calling time, unlimited text messages, closest to 4 GB data
            Price includes: All monthly fees for specified package
            Price excludes: Registration fees
            Exclude: International calls, contracts providing a mobile phone
            Specify: Provider name, monthly total usage, length of contract'),
            array('pcode' => '1108311150','pname' => 'Monthly mobile phone plan, unlimited call and text, with cap on data plan [1 Month]','pspecs' => 'Monthly mobile phone plan, unlimited call and text, with cap on data plan
            Preferred quantity: 1 Month
            Service: Monthly usage of calls, SMS and mobile internet
            Line type: GSM
            Duration: Unlimited calling time, unlimited text messages, unlimited data with cap
            Price includes: All monthly fees for specified package
            Price excludes: Registration fees
            Exclude: International calls, contracts providing a mobile phone
            Specify: Provider name, monthly total usage, length of contract, bandwidth cap; specify if unlimited call/SMS from the same network provider or different network providers'),
            array('pcode' => '1108311160','pname' => 'Internet connection, 201 - 400 Mbps [1 Month]','pspecs' => 'Internet connection, 201 - 400 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, 201 - 400 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. rent of modem, fixed costs for telephone line, telephone charges)'),
            array('pcode' => '1108311170','pname' => 'Internet connection, higher than 400 Mbps [1 Month]','pspecs' => 'Internet connection, higher than 400 Mbps
            Preferred quantity: 1 Month
            Service: Fixed internet connection, higher than 400 Mbps, unlimited download
            Line type: DSL, cable or fiber
            Price excludes: Any other costs (e.g. rent of modem, fixed costs for telephone line, telephone charges)
            Specify: Bandwidth if more than 400 Mbps'),
            array('pcode' => '1108311180','pname' => 'Mobile prepaid card, 200 - 400 units, 2 GB [1 Month]','pspecs' => 'Mobile prepaid card, 200 - 400 units, 2 GB
            Preferred quantity: 1 Month
            Service: Prepaid card, monthly top up
            Line type: GSM
            Duration: Between 400 to 600 minutes of calling time or text messages, closest to 2 GB data
            Price includes: All monthly fees for specified package
            Price excludes: Registration fees
            Exclude: International calls, contracts providing a mobile phone, promotional fees, post-paid packages
            Specify: Provider name, monthly total usage
            Notes: New item'),
            array('pcode' => '1108311190','pname' => 'Mobile prepaid card, 400 - 600 units, 4 GB [1 Month]','pspecs' => 'Mobile prepaid card, 400 - 600 units, 4 GB
            Preferred quantity: 1 Month
            Service: Prepaid card, monthly top up
            Line type: GSM
            Duration: Between 400 to 600 minutes of calling time or text messages, closest to 4 GB data
            Price includes: All monthly fees for specified package
            Price excludes: Registration fees
            Exclude: International calls, contracts providing a mobile phone, promotional fees, post-paid packages
            Specify: Provider name, monthly total usage
            Notes: New item'),
            array('pcode' => '1109111020','pname' => 'Digital compact camera, CANON IXUS 285 HS [1 Piece]','pspecs' => 'Digital compact camera, CANON IXUS 285 HS
            Brand: Canon
            Model: IXUS 285 HS
            Preferred quantity: 1 Piece
            Type: Digital compact camera (point and shoot)
            Display size: TFT 3.0"
            Pixels: 20.2 MP
            Optical zoom: 12x
            Sensor type: CMOS sensor
            Processor: DIGIC 4+
            Connectivity: Wi-Fi & NFC
            Specify: Model
            Notes: Model updated'),
            array('pcode' => '1109111030','pname' => 'Desktop computer Core i-7, 5.2 GHz, WKB [1 Set]','pspecs' => 'Desktop computer Core i-7, 5.2 GHz, WKB
            Brand: Acer (indicative) except HP and Dell
            Model: Aspire TC 1770 (indicative)
            Preferred quantity: 1 Set
            Display size: LED Monitor 24"
            Display resolution: 1920x1080 @100Hz
            Processor: i7-13700 (16-Cores, 24MB L2 ache, 5.2GHz)
            Installed memory: 8 GB (1x8GB) DDR4 3200MHz
            Mass storage: 1 TB HDD, 256 GB SSD
            CD/DVD: No
            Connectivity: Wireless/Bluetooth/LAN
            Operating system: Microsoft Windows 11 Home, 64 bit
            Include: Mouse and keyboard
            Exclude: Touch screen monitor
            Specify: Model
            Notes: Model updated'),
            array('pcode' => '1109111040','pname' => 'Laptop computer, Acer Aspire 3 series [1 Piece]','pspecs' => 'Laptop computer, Acer Aspire 3 series
            Brand: Acer
            Model: Aspire 3 Intel series
            Preferred quantity: 1 Piece
            Type: Laptop computer
            Display size: 15.6"
            Display resolution: Full HD 1920 x 1080
            Processor: Intel i3-N305 processor Octa-core 1.80 GHz (S)
            Installed memory: 8 GB
            Mass storage: 256 GB SSD
            CD/DVD: No
            Connectivity: Wi-Fi, Bluetooth
            Operating system: Windows 11 Home
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111050','pname' => 'Laptop computer, APPLE MacBook Air [1 Piece]','pspecs' => 'Laptop computer, APPLE MacBook Air
            Brand: Apple
            Model: MacBook Air 13 with M1 chip
            Preferred quantity: 1 Piece
            Type: Laptop computer
            Display size: 13.3"
            Display resolution: 2560 x 1600, Retina, IPS-panel
            Processor: Apple M1
            Installed memory: 8 GB
            Mass storage: 256 GB SSD (M.2 PCIe NVMe)
            CD/DVD: No
            Connectivity: Wi-Fi, Bluetooth
            Operating system: macOS Big Sur
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111060','pname' => 'Laptop computer, ASUS Chromebook series [1 Piece]','pspecs' => 'Laptop computer, ASUS Chromebook series
            Brand: Asus
            Model: Chromebook series (such as Chromebook 14 C425TA) (S)
            Preferred quantity: 1 Piece
            Type: Laptop computer
            Display size: 14"
            Display resolution: Full HD 1920 x 1080
            Processor: Intel Celeron N3350 Processor 1.1 GHz (2M Cache, up to 2.4 GHz, 2 cores) (S)
            Installed memory: 8 GB
            Mass storage: 128 GB
            CD/DVD: No
            Connectivity: Wi-Fi, Bluetooth
            Operating system: Chrome
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111070','pname' => 'Laptop computer, DELL Inspiron 15 series [1 Piece]','pspecs' => 'Laptop computer, DELL Inspiron 15 series
            Brand: Dell
            Model: Inspiron 15 series (S)
            Preferred quantity: 1 Piece
            Type: Laptop computer
            Display size: 15.6"
            Display resolution: Full HD 1920 x 1080
            Processor: 11th Gen Intel® Core™ i7-1165G7
            Installed memory: 8 GB
            Mass storage: 512 GB SSD
            CD/DVD: No
            Connectivity: Wi-Fi, Bluetooth
            Operating system: Windows 11 Home
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111080','pname' => 'Laptop computer, HP 250 G8 [1 Piece]','pspecs' => 'Laptop computer, HP 250 G8
            Brand: HP
            Model: 250 G8 (S)
            Preferred quantity: 1 Piece
            Type: Laptop computer
            Display size: 15.6”
            Display resolution: Full HD 1920 x 1080
            Processor: Intel i5-series or AMD Ryzen 5-series (S)
            Installed memory: 8 GB DDR4
            Mass storage: 512 GB SSD (M.2 PCIe NVMe)
            CD/DVD: No
            Connectivity: Wi-Fi, Bluetooth
            Operating system: Windows 11 Home
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111090','pname' => 'Laptop computer, LENOVO Ideapad 3 14 [1 Piece]','pspecs' => 'Laptop computer, LENOVO Ideapad 3 14
            Brand: Lenovo
            Model: Ideapad 3i (Intel) or Ideapad 3 (AMD) (S)
            Preferred quantity: 1 Piece
            Type: Laptop computer
            Display size: 14"
            Display resolution: Full HD 1920 x 1080
            Processor: Intel Core i5-series (e.g. i5-1135G7) or AMD Ryzen 5-series (e.g. R5 5500U) (S)
            Installed memory: 8 GB
            Mass storage: 256 GB SSD (M.2 PCIe NVMe)
            CD/DVD: No
            Connectivity: Wi-Fi, Bluetooth
            Operating system: Windows 11 Home
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111120','pname' => 'Application Suite, MS Office 2021 Home and Student, full version [1 Piece]','pspecs' => 'Application Suite, MS Office 2021 Home and Student, full version
            Brand: Microsoft (MS)
            Model: Office 2021 Home and Student
            Preferred quantity: 1 Piece
            Type: Software suite for single user
            Operating system: Windows
            Language: National or most sold
            Include: Word, Excel, Powerpoint, OneNote
            Exclude: Non-official copies, OEM version, software purchased together with new device
            Notes: One-time purchase and for non-commercial use'),
            array('pcode' => '1109111130','pname' => 'Tablet, APPLE iPad Air, 64 GB [1 Piece]','pspecs' => 'Tablet, APPLE iPad Air, 64 GB
            Brand: Apple
            Model: iPad 10.2" WiFi 64 GB (S)
            Preferred quantity: 1 Piece
            Type: Tablet
            Display size: 10.9"
            Display resolution: 2160 x 1620 LED-backlight Multi-Touch, Retina IPS
            Processor: M1 Chip
            Installed memory: 8 GB
            Mass storage: 64 GB
            Connectivity: Wi-Fi, Bluetooth
            Operating system: iPad OS 17
            Exclude: models with cellular connection
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111140','pname' => 'Tablet, SAMSUNG Galaxy Tab S9 FE, 128 GB [1 Piece]','pspecs' => 'Tablet, SAMSUNG Galaxy Tab S9 FE, 128 GB
            Brand: Samsung
            Model: Galaxy Tab S9 FE 10.9" 5G 128 GB (S)
            Preferred quantity: 1 Piece
            Type: Tablet
            Display size: TFT 10.9"
            Display resolution: 2304 x 1440 (WUXGA+), 16:10 ratio
            Processor: 2.4 GHz, 2 GHz Octa core
            Installed memory: 6 GB
            Mass storage: 128 GB
            Connectivity: 5G, Bluetooth
            Operating system: Android 13 with One UI 5.1.1
            Exclude: WiFi models
            Specify: Model
            Notes: Model updated'),
            array('pcode' => '1109111170','pname' => 'Television, LED, 32", Smart TV [1 Piece]','pspecs' => 'Television, LED, 32", Smart TV
            Brand: LG, PHILIPS, SAMSUNG
            Model: 32LM6370 (LG), 32PFS6905 (Android-TV) (PHILIPS), UE32T5305 (SAMSUNG)
            Preferred quantity: 1 Piece
            Type: Flat panel LED TV, Smart TV
            Display size: 32" / 81 cm
            Display resolution: Full HD
            Connectivity: WiFi, HDMI, USB, Bluetooth
            Exclude: 4K or 3D models, OLED, curved TVs
            Specify: Brand and model
            Notes: model updated'),
            array('pcode' => '1109111180','pname' => 'Television, LED, 43", LG [1 Piece]','pspecs' => 'Television, LED, 43", LG
            Brand: LG
            Model: 43UP76 models ; e.g. 43UP76909LE
            Preferred quantity: 1 Piece
            Type: Flat panel LED TV, Smart TV
            Display size: 43" / 109 cm
            Display resolution: 4K
            Connectivity: HDMI, USB, WiFi, Ethernet
            Exclude: 3D models, curved TVs
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111190','pname' => 'Television, LED, 43\'\', SAMSUNG [1 Piece]','pspecs' => 'Television, LED, 43\'\', SAMSUNG
            Brand: Samsung
            Model: UE43AU7171xx
            Preferred quantity: 1 Piece
            Type: flat panel, Saphi Smart TV
            Display size: 43" / 109 cm
            Display resolution: 4K
            Connectivity: HDMI, USB, WiFi, Ethernet
            Exclude: 3D models, curved TVs
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111200','pname' => 'Television, LED, 50", PHILIPS [1 Piece]','pspecs' => 'Television, LED, 50", PHILIPS
            Brand: Philips
            Model: 50PUS7506
            Preferred quantity: 1 Piece
            Type: Flat panel LED TV, Smart TV
            Display size: 50" / 128 cm
            Display resolution: 4K UHD
            Connectivity: HDMI, USB, WiFi, Ethernet
            Exclude: 3D models, curved TVs
            Specify: Model
            Notes: New model'),
            array('pcode' => '1109111210','pname' => 'Television, QLED, 55", SAMSUNG [1 Piece]','pspecs' => 'Television, QLED, 55", SAMSUNG
            Brand: SAMSUNG
            Model: QE55Q60A
            Preferred quantity: 1 Piece
            Type: Flat panel QLED TV, Smart TV
            Display size: 55" / 140 cm
            Display resolution: 4K UHD
            Connectivity: HDMI, USB, WiFi, Ethernet
            Exclude: 3D models, curved TVs
            Specify: Model
            Notes: model updated'),
            array('pcode' => '1109111220','pname' => 'Desktop computer Core i-7, 4.9 GHz, HP Pavillion [1 Set]','pspecs' => 'Desktop computer Core i-7, 4.9 GHz, HP Pavillion
            Brand: HP
            Model: 27-ca2055t AiO
            Preferred quantity: 1 Set
            Display size: LED Monitor 27"
            Display resolution: 1920x1080
            Processor: i7-13700T (16 cores, 24MB L2 cache, 4.9 Ghz)
            Installed memory: 16 GB (2x8GB) DDR4 3200MHz
            Mass storage: 1 TB HDD, 512 GB SSD
            CD/DVD: No
            Connectivity: Wireless/Bluetooth/LAN
            Operating system: Microsoft Windows 11 Home, 64 bit
            Include: Mouse and keyboard
            Exclude: Touch screen monitor
            Specify: Model
            Notes: New item'),
            array('pcode' => '1109111230','pname' => 'Desktop computer Core i-7, 5.1 GHz, Dell Inspiron [1 Set]','pspecs' => 'Desktop computer Core i-7, 5.1 GHz, Dell Inspiron
            Brand: Dell
            Model: Inspiron 3020
            Preferred quantity: 1 Set
            Display size: LED Monitor 24"
            Display resolution: 1920x1080
            Processor: i7-13700 (16-Cores, 24MB L2 ache, 5.2GHz)
            Installed memory: 16 GB (2x8GB) DDR4 3200MHz
            Mass storage: 1 TB HDD, 512 GB SSD
            CD/DVD: No
            Connectivity: Wireless/Bluetooth/LAN
            Operating system: Microsoft Windows 11 Home, 64 bit
            Include: Mouse and keyboard
            Exclude: Touch screen monitor
            Specify: Model
            Notes: New item'),
            array('pcode' => '1109111240','pname' => 'Digital single lens reflex camera, CANON EOS 200D II (kit) [1 Piece]','pspecs' => 'Digital Single Lens Reflex camera, CANON EOS 200D II (kit)
            Brand: Canon
            Model: EOS 200D II + EF-S 18-55 mm f/4-5.6 IS STM lens (kit)
            Preferred quantity: 1 Piece
            Type: Digital Single Lens Reflex (DSLR)
            Display size: TFT 3.0"
            Pixels: 24.1MP
            Optical zoom: 3x
            Sensor type: APS-C CMOS Sensor
            Processor: DIGIC 8
            Connectivity: Wi-Fi
            Include: EF-S 18 - 55 mm f/4-5.6 IS STM lens
            Specify: Model
            Notes: New item'),
            array('pcode' => '1109141010','pname' => 'External hard drive, 2 TB, WKB [1 Piece]','pspecs' => 'External hard drive, 2 TB, WKB
            Preferred quantity: 1 Piece
            Brand: Buffalo, Iomega, Lacie, Verbatim, Western Digital
            Type: Portable External Hard Drive
            Capacity: 2 TB
            Specify: Brand, model'),
            array('pcode' => '1109141020','pname' => 'International pop music compact disc [1 Piece]','pspecs' => 'International pop music compact disc
            Preferred quantity: 1 Piece
            Brand: Original music brand
            Type: Compact disc (single sided)'),
            array('pcode' => '1109141030','pname' => 'Local pop music compact disc, WKB [1 Piece]','pspecs' => 'Local pop music compact disc, WKB
            Preferred quantity: 1 Piece
            Brand: Well known
            Type: Compact disc (single sided)'),
            array('pcode' => '1109141040','pname' => 'Micro SDHC memory card, 64 GB, WKB [1 Piece]','pspecs' => 'Micro SDHC memory card, 64 GB, WKB
            Preferred quantity: 1 Piece
            Brand: Well Known
            Type: Micro SDHC card for mobile phones and other mobile devices
            Capacity: 64 GB
            Exclude: SD and MiniSD cards
            Specify: Brand, model'),
            array('pcode' => '1109141050','pname' => 'Pre-recorded DVD Movie, Top 5 [1 Piece]','pspecs' => 'Pre-recorded DVD Movie, Top 5
            Preferred quantity: 1 Piece
            Type: In top 5 of most sold movie DVD at the time of the survey, newly released, original copy
            Exclude: Non-original DVDs, illegal copies, collector\'s editions
            Specify: Movie title'),
            array('pcode' => '1109141060','pname' => 'USB flash drive, 32 GB, WKB [1 Piece]','pspecs' => 'USB flash drive, 32 GB, WKB
            Preferred quantity: 1 Piece
            Brand: Well Known
            Type: USB flash drive
            Capacity: 32 GB
            Specify: Brand, model'),
            array('pcode' => '1109151010','pname' => 'Laptop technician, repair service [1 Service]','pspecs' => 'Laptop technician, repair service
            Preferred quantity: 1 Service
            Service: Replacement of laptop battery
            Service by: Service by qualified PC technician (not by dealer), at premises of the technician (company)
            Price includes: Labor cost and VAT
            Price excludes: Price of materials
            Time of service: After warranty period
            Exclude: Apple computers'),
            array('pcode' => '1109151020','pname' => 'Phone repair, replacement of screen for APPLE iPhone 13 [1 Service]','pspecs' => 'Phone repair, replacement of screen for APPLE iPhone 13
            Preferred quantity: 1 Service
            Service: Replacement of screen for Apple iPhone 13
            Service by: Any non-APPLE repair-shop
            Price includes: Price of a new screen, labor cost and VAT
            Time of service: After warranty period
            Exclude: Service by Apple'),
            array('pcode' => '1109151030','pname' => 'Phone repair, replacement of screen for SAMSUNG Galaxy S21 [1 Service]','pspecs' => 'Phone repair, replacement of screen for SAMSUNG Galaxy S21
            Preferred quantity: 1 Service
            Service: Replacement of screen for Samsung Galaxy S21
            Service by: Any non-Samsung repair-shop
            Price includes: Price of a new screen, labor cost and VAT
            Time of service: After warranty period
            Exclude: Service by Samsung'),
            array('pcode' => '1109151040','pname' => 'TV technician, repair service [1 Service]','pspecs' => 'TV technician, repair service
            Preferred quantity: 1 Service
            Service: Detect origin of the fault, and replace 1 integrated circuit (IC) part
            Service by: Service at specialized service center
            Price includes: Labor cost and VAT
            Price excludes: Price of materials
            Time of service: After warranty period
            Specify: Television brand'),
            array('pcode' => '1109311010','pname' => 'Badminton racket for advanced level, Yonex [1 Piece]','pspecs' => 'Badminton racket for advanced level, Yonex
            Brand: Yonex (original)
            Model: ARCSABER 11 TOUR (https://www.yonex.com/arc11-t)
            Preferred quantity: 1 Piece
            Material: Frame: HM Graphite / POCKETING BOOSTER; Shaft: HM Graphite / SUPER HMG; flex: STIFF; Joint: Built-in T-Joint / T-ANCHOR'),
            array('pcode' => '1109311020','pname' => 'Badminton racket for beginner, Yonex [1 Piece]','pspecs' => 'Badminton racket for beginner, Yonex
            Brand: Yonex (original)
            Model: ASTROX 88 S PLAY (https://www.yonex.com/badminton/astrox-88-s-play)
            Preferred quantity: 1 Piece
            Material: Frame and Shaft: graphite; nylon net; Medium flex
            Package: Case
            Exclude: Models 88S Pro, 88S Skill, 88S Game, 88S Tour'),
            array('pcode' => '1109311030','pname' => 'Chess set, BL [1 Set]','pspecs' => 'Chess set, BL
            Brand: Brandless
            Preferred quantity: 1 Set
            Material: Plastic pieces
            Package: Box
            Dimensions: approximate 5 cm in height (tall), 24 cm length (Board), 24 cm width (Board); Height of chess king'),
            array('pcode' => '1109311040','pname' => 'Doll, MATTEL Barbie [1 Piece]','pspecs' => 'Doll, MATTEL Barbie
            Brand: Mattel
            Model: "Barbie
            Preferred quantity: 1 Piece
            Type: Barbie doll
            Exclude: Imitation brands, and sets with more dolls or accessories
            Specify: Model'),
            array('pcode' => '1109311050','pname' => 'Football (soccer ball), WKB [1 Piece]','pspecs' => 'Football (soccer ball), WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Size 5 regular football (soccer ball) for adults
            Material: Cover
            Dimensions: Circumference 69-71 cm
            Weight: 420-450 g
            Exclude: Special models
            Specify: Brand'),
            array('pcode' => '1109311060','pname' => 'Pack of 52 playing cards, BL [1 Set]','pspecs' => 'Pack of 52 playing cards, BL
            Brand: Brandless
            Preferred quantity: 1 Set
            Type: Playing cards in paper or plastic box
            Material: Plastic cards
            Dimensions: 9 (H) x 6 (W) cm
            Exclude: Museum goods or other specially designed products
            Specify: Label, if any'),
            array('pcode' => '1109311070','pname' => 'Swimming goggles, adult, Speedo [1 Piece]','pspecs' => 'Swimming goggles, adult, Speedo
            Brand: Speedo (original)
            Preferred quantity: 1 Piece
            Type: Swim goggles adult size
            Package: Case
            Specify: Model'),
            array('pcode' => '1109311080','pname' => 'Table tennis racket for adult beginner, WKB [1 Piece]','pspecs' => 'Table tennis racket for adult beginner, WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Basic table tennis racket for adult beginners, without grip covering
            Specify: Brand'),
            array('pcode' => '1109311090','pname' => 'Tennis balls, multipack, WILSON [1 Pack]','pspecs' => 'Tennis balls, multipack, WILSON
            Brand: Wilson
            Preferred quantity: 1 Pack
            Type: Pack of regular duty tennis balls
            Package: Pack of 3 balls
            Specify: Model'),
            array('pcode' => '1109311100','pname' => 'Video game console, SONY PlayStation 5 [1 Piece]','pspecs' => 'Video game console, SONY PlayStation 5
            Brand: Sony
            Model: PlayStation 5
            Preferred quantity: 1 Piece
            Type: Video game console (home)
            Exclude: PlayStation 5 Digital Edition; packages with extra remote controllers or games'),
            array('pcode' => '1109331010','pname' => 'Aquarium 25L, BL [1 Set]','pspecs' => 'Aquarium 25L, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 1 Set
            Type: Inside tank (but not underground); One nozzle; Carbon, pre-washed
            Price excludes: Price for fishes or decorations (if not free)'),
            array('pcode' => '1109331020','pname' => 'Dog food, dried, WKB [10 Kilogram]','pspecs' => 'Dog food, dried, WKB
            Brand: Well Known
            Preferred quantity: 10
            Quantity range: 10 - 20 Kilogram
            Type: Dried dog food, meat (chicken or beef), cereals, for adult large dog
            Packaging: Prepacked; bag
            Exclude: Diet products; products for individual breeds; products for dogs with special needs (old age, sensitive skin, joint problems etc.)
            Specify: Brand, model'),
            array('pcode' => '1109331030','pname' => 'Fish food, floating pellets, BL [300 Gram]','pspecs' => 'Fish food, floating pellets, BL
            Brand: Brandless
            Preferred quantity: 300
            Quantity range: 200 - 350 Gram
            Type: Freshwater fish
            Packaging: Plastic'),
            array('pcode' => '1109331040','pname' => 'Flower pot, terracotta, BNR [1 Piece]','pspecs' => 'Flower pot, terracotta, BNR
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Clay terracotta without saucer (for potting plants in the house)
            Design: Round, slightly conical basic pot, without decoration/molding
            Dimensions: Diameter 23 cm
            Exclude: Exclude special weather-resistant products
            Specify: Dimensions'),
            array('pcode' => '1109331050','pname' => 'Flower, rose, sold individually, BNR [1 Piece]','pspecs' => 'Flower, rose, sold individually, BNR
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Red rose, sold individually
            Color: Red
            Dimensions: Diameter 6 cm (of the open bud), height 70 cm
            Exclude: Bouquets'),
            array('pcode' => '1109331060','pname' => 'Indoor plants, BNR [1 Piece]','pspecs' => 'Indoor plants, BNR
            Brand: Brand not relevant
            Preferred quantity: 1
            Quantity range: 1 Piece
            Dimensions: Plant - height (from soil to top)'),
            array('pcode' => '1109331070','pname' => 'Pet goldfish, 10cm, BNR [1 Piece]','pspecs' => 'Pet goldfish, 10cm, BNR
            Brand: Brand not relevant
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Fresh water Fish-Gold fish
            Dimensions: 10 cm'),
            array('pcode' => '1109351010','pname' => 'Consultation - Veterinary [1 Service]','pspecs' => 'Consultation - Veterinary
            Preferred quantity: 1 Service
            Service: General diagnosis, medical history taking, and referral and prescription, as appropriate
            Price includes: Consultation fee from a Private Veterinary Clinic
            Exclude: Medicine fee'),
            array('pcode' => '1109351020','pname' => 'Veterinary service, desexing of a female cat [1 Service]','pspecs' => 'Veterinary service, desexing of a female cat
            Preferred quantity: 1 Service
            Service: Spaying (ovaries removal) of a 3 kg female cat
            Price includes: All professional fees, aftercare (such as removal of stitches)'),
            array('pcode' => '1109351030','pname' => 'Veterinary service, inoculation of a dog [1 Service]','pspecs' => 'Veterinary service, inoculation of a dog
            Preferred quantity: 1 Service
            Service: Anti-rabies inoculation for a dog, 1 shot
            Price includes: Vaccine, all professional fees
            Exclude: Vaccination for puppies'),
            array('pcode' => '1109411010','pname' => 'Aerobic Center, monthly subscription [1 Month]','pspecs' => 'Aerobic Center, monthly subscription
            Preferred quantity: 1 Month
            Service: Monthly membership fee for one adult at private aerobic center
            Price includes: Unlimited access to aerobic center, changing facilities, shower rooms
            Price excludes: Registration fee and other special rate, insurance fee
            Exclude: Promotional discounted price'),
            array('pcode' => '1109411020','pname' => 'Fitness center, monthly subscription [1 Month]','pspecs' => 'Fitness center, monthly subscription
            Preferred quantity: 1 Month
            Service: Monthly membership fee for one adult at private fitness center
            Price includes: Unlimited access to fitness center, weight machines, aerobics, changing facilities, shower rooms
            Price excludes: Registration fee and other special rate, insurance fee
            Exclude: Promotional discounted price; subscription plans which include access to a pool'),
            array('pcode' => '1109411030','pname' => 'Guitar course for a beginner, 4-6 sessions [6 Sessions]','pspecs' => 'Guitar course for a beginner, 4-6 sessions
            Preferred quantity: 6
            Quantity range: 4 - 6 Session
            Service: Private lesson (one to one) for a beginner by a qualified private teacher
            Duration: 40-60 minutes, 4-6 sessions
            Specify: Duration of lesson in minutes'),
            array('pcode' => '1109411040','pname' => 'Ten pin bowling cost [1 Game]','pspecs' => 'Ten pin bowling cost
            Preferred quantity: 1 Game
            Price includes: Locker fees'),
            array('pcode' => '1109411050','pname' => 'Use of swimming pool, ticket [1 Ticket]','pspecs' => 'Use of swimming pool, ticket
            Preferred quantity: 1 Ticket
            Service: Adult admission ticket for swimming at public pool
            Price includes: Locker fees'),
            array('pcode' => '1109421010','pname' => 'Cinema ticket, weekend [1 Ticket]','pspecs' => 'Cinema ticket, weekend
            Preferred quantity: 1 Ticket
            Service: Screening of a newly released bestseller movie
            Service location: City center
            Time: Evening movie show on weekend
            Exclude: Any discounts, seasonal ticket, iMax theater, 3D theater'),
            array('pcode' => '1109421020','pname' => 'Digital photo print [30 Piece]','pspecs' => 'Digital photo print
            Preferred quantity: 30 Piece
            Service: Printing of pictures from digital data storage device or internet upload
            Number of photos: 30 photos
            Printing: Glossy borderless; standard paper, ink, printing quality
            Size: 10 x 15 cm (4R size)
            Availability of prints: Pick up at shop
            Exclude: Special paper'),
            array('pcode' => '1109421030','pname' => 'Movie/Series streaming subscription, NETFLIX [1 Month]','pspecs' => 'Movie/Series streaming subscription, NETFLIX
            Preferred quantity: 1 Month
            Service: Basic monthly subscription for Netflix
            Service provider: Netflix'),
            array('pcode' => '1109421040','pname' => 'Music streaming subscription, SPOTIFY [1 Month]','pspecs' => 'Music streaming subscription, SPOTIFY
            Preferred quantity: 1 Month
            Service: Individual monthly subscription for Spotify
            Service provider: Spotify'),
            array('pcode' => '1109421050','pname' => 'Passport-type photos, by photographer [1 Set]','pspecs' => 'Passport-type photos, by photographer
            Preferred quantity: 1 Set
            Service: Passport-type color photos taken by photographer
            Number of photos: 4 - 6 photos
            Printing: Local standard
            Size: 4 x 5 cm
            Availability of prints: Pick up at shop
            Service location: Specialized shop
            Exclude: Self-service machines'),
            array('pcode' => '1109421060','pname' => 'Cable TV service, Basic Service [1 Month]','pspecs' => 'Cable TV service, Basic Service
            Preferred quantity: 1 Month
            Type: Periodic charges excluding installation charge
            Service: Monthly subscription of Cable TV services from local operator
            Specify: Service provider'),
            array('pcode' => '1109511010','pname' => 'Daily newspaper, paper, single issue, WKB [1 Piece]','pspecs' => 'Daily newspaper, paper, single issue, WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: National daily newspaper with largest circulation in the country
            Purchased at: Price at newsstand
            Language: National, or most sold language
            Exclude: Specialized papers and issues; subscription
            Specify: Name of newspaper'),
            array('pcode' => '1109511020','pname' => 'Envelopes, pack of 12, BL [1 Pack]','pspecs' => 'Envelopes, pack of 12, BL
            Brand: Brandless
            Preferred quantity: 1 Pack
            Type: Plain envelopes
            Material: Common wood paper; recycled
            Purchased at: 1 pack containing 12 envelopes
            Format: Plain
            Dimensions: Length of envelopes 22 cm, Width of envelopes 10 cm
            Specify: Brand, if any'),
            array('pcode' => '1109511030','pname' => 'Fixed Ball Point Pen, WKB [1 Piece]','pspecs' => 'Fixed Ball Point Pen, WKB
            Brand: Well known
            Preferred quantity: 1 Piece
            Material: Plastic
            Dimensions: Length 15 cm
            Specify: Brand'),
            array('pcode' => '1109511040','pname' => 'Notebook, spring-binded, close to 100 sheets, WKB [1 Piece]','pspecs' => 'Notebook, spring-binded, close to 100 sheets, WKB
            Brand: Well known such as Corona, Cattleya or Sterling
            Preferred quantity: 1 Piece
            Dimensions: Length 20 cm, Width15 cm
            Specify: Brand, number of sheets (not number of pages)'),
            array('pcode' => '1109511050','pname' => 'Novel, paperback, Top 10 [1 Piece]','pspecs' => 'Novel, paperback, Top 10
            Preferred quantity: 1 Piece
            Type: Best-selling novel (fiction) at the time of the survey
            Author: A renowned writer, national or foreigner
            Format: Standard paperback edition
            Language: National, or most sold language
            Dimensions: Approx. 14 x 22 cm, 251-500 pages
            Exclude: Digital editions, children\'s books, non-fiction books
            Specify: Name of the book and author'),
            array('pcode' => '1109511060','pname' => 'Pencil, HB, WKB [1 Piece]','pspecs' => 'Pencil, HB, WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: HB basic pencil, without eraser, sold individually
            Material: Wood
            Dimensions: 15cm (L)
            Exclude: Multiple packages, "artistic" pencils
            Specify: Brand'),
            array('pcode' => '1109511070','pname' => 'Plastic handle scissors, WKB [1 Piece]','pspecs' => 'Plastic handle scissors, WKB
            Brand: Well known
            Preferred quantity: 1 Piece
            Type: Multipurpose scissors
            Material: Plastic handle, steel blade
            Format: Right handed
            Dimensions: 25 cm total length
            Specify: Brand'),
            array('pcode' => '1109511080','pname' => 'Plastic ruler, BL [1 Piece]','pspecs' => 'Plastic ruler, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Flat, transparent
            Material: Plastic
            Dimensions: 30 cm (L)
            Specify: Label, if any'),
            array('pcode' => '1109511090','pname' => 'University notebook, WKB [1 Piece]','pspecs' => 'University notebook, WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: A4/Letter size spiral notebook with 100 pages
            Dimensions: A4 or Letter size
            Specify: Brand, number of pages'),
            array('pcode' => '1109511100','pname' => 'Note book, soft cover, non-spiral 100 sheets, WKB [1 Piece]','pspecs' => 'Note book, soft cover, non-spiral 100 sheets, WKB
            Brand: Well known
            Preferred quantity: 1 Piece
            Type: 75-125 sheets, soft cover, non-spiral, glue bound, regular school notebook
            Dimensions: Length 20 cm, Width16 cm
            Specify: Brand, number of sheets (not number of pages)'),
            array('pcode' => '1109611010','pname' => 'Package holiday by air, close to 1500 kms [1 Package holiday]','pspecs' => 'Package holiday by air, close to 1500 kms
            Preferred quantity: 1 Package holiday
            Origin: Typical source
            Characteristics: Duration, 4 nights
            Description of fare-pricing unit: Price per person for twin-sharing basis
            Type of cruise package: Airplane; Round trip
            Type of passenger: One Adult only
            Travel season: Peak season at destination
            Other Item Features: Entry to tourist attractions is not included
            Type of Accommodation: Hotel Room
            Flight Details: Economy Class
            Hotel Characteristics: Pool; Business Centre; Currency exchange; 3 star rated hotel
            Hotel Room Characteristics: Private bathroom; TV with cable access; Direct dial telephone; Mini-bar; In room safe; Non-smoking; Air conditioning; All meals included'),
            array('pcode' => '1109611020','pname' => 'Package holiday by air, close to 1500 kms, online transaction [1 Package holiday]','pspecs' => 'Package holiday by air, close to 1500 kms, online transaction
            Preferred quantity: 1 Package holiday
            Origin: Typical source
            Characteristics: Duration, 4 nights, online transaction
            Description of fare-pricing unit: Price per person for twin-sharing basis
            Type of cruise package: Airplane; Round trip
            Type of passenger: One Adult only
            Travel season: Peak season at destination
            Other Item Features: Entry to tourist attractions is not included
            Type of Accommodation: Hotel Room
            Flight Details: Economy Class
            Hotel Characteristics: Pool; Business Centre; Currency exchange; 3 star rated hotel
            Hotel Room Characteristics: Private bathroom; TV with cable access; Direct dial telephone; Mini-bar; In room safe; Non-smoking; Air conditioning; All meals included'),
            array('pcode' => '1109611030','pname' => 'Package holiday by air, close to 3000 kms [1 Package holiday]','pspecs' => 'Package holiday by air, close to 3000 kms
            Preferred quantity: 1 Package holiday
            Origin: Typical source
            Characteristics: Duration, 5 nights
            Description of fare-pricing unit: Price per person for twin-sharing basis
            Type of cruise package: Airplane; Round trip
            Type of passenger: One Adult only
            Travel season: Peak season at destination
            Other Item Features: Entry to tourist attractions is not included
            Type of Accommodation: Hotel Room
            Flight Details: Economy Class
            Hotel Characteristics: Pool; Business Centre; Currency exchange; 3 star rated hotel
            Hotel Room Characteristics: Private bathroom; TV with cable access; Direct dial telephone; Mini-bar; In room safe; Non-smoking; Air conditioning; All meals included'),
            array('pcode' => '1109611040','pname' => 'Package holiday by air, close to 3000 kms, online transaction [1 Package holiday]','pspecs' => 'Package holiday by air, close to 3000 kms, online transaction
            Preferred quantity: 1 Package holiday
            Origin: Typical source
            Characteristics: Duration, 5 nights, online transaction
            Description of fare-pricing unit: Price per person for twin-sharing basis
            Type of cruise package: Airplane; Round trip
            Type of passenger: One Adult only
            Travel season: Peak season at destination
            Other Item Features: Entry to tourist attractions is not included
            Type of Accommodation: Hotel Room
            Flight Details: Economy Class
            Hotel Characteristics: Pool; Business Centre; Currency exchange; 3 star rated hotel
            Hotel Room Characteristics: Private bathroom; TV with cable access; Direct dial telephone; Mini-bar; In room safe; Non-smoking; Air conditioning; All meals included'),
            array('pcode' => '1109611050','pname' => 'Package holiday by air, close to 500 kms [1 Package holiday]','pspecs' => 'Package holiday by air, close to 500 kms
            Preferred quantity: 1 Package holiday
            Origin: Typical source
            Characteristics: Duration, 3 nights
            Description of fare-pricing unit: Price per person for twin-sharing basis
            Type of cruise package: Airplane; Round trip
            Type of passenger: One Adult only
            Travel season: Peak season at destination
            Other Item Features: Entry to tourist attractions is not included
            Type of Accommodation: Hotel Room
            Flight Details: Economy Class
            Hotel Characteristics: Pool; Business Centre; Currency exchange; 3 star rated hotel
            Hotel Room Characteristics: Private bathroom; TV with cable access; Direct dial telephone; Mini-bar; In room safe; Modem telephones; Non-smoking; Air conditioning; All meals included
            Comment: Please indicate in the Remarks the taxes included in the observed price, if any. Specify the amount and the type of tax'),
            array('pcode' => '1109611060','pname' => 'Package holiday by air, close to 500 kms, online transaction [1 Package holiday]','pspecs' => 'Package holiday by air, close to 500 kms, online transaction
            Preferred quantity: 1 Package holiday
            Origin: Typical source
            Characteristics: Duration, 3 nights, online transaction
            Description of fare-pricing unit: Price per person for twin-sharing basis
            Type of cruise package: Airplane; Round trip
            Type of passenger: One Adult only
            Travel season: Peak season at destination
            Other Item Features: Entry to tourist attractions is not included
            Type of Accommodation: Hotel Room
            Flight Details: Economy Class
            Hotel Characteristics: Pool; Business Centre; Currency exchange; 3 star rated hotel
            Hotel Room Characteristics: Private bathroom; TV with cable access; Direct dial telephone; Mini-bar; In room safe; Modem telephones; Non-smoking; Air conditioning; All meals included
            Comment: Please indicate in the Remarks the taxes included in the observed price, if any. Specify the amount and the type of tax'),
            array('pcode' => '1109611070','pname' => 'Package holiday by road or rail, close to 500 kms [1 Package holiday]','pspecs' => 'Package holiday by road or rail, close to 500 kms
            Preferred quantity: 1 Package holiday
            Origin: Typical source
            Characteristics: Duration, 3 nights
            Description of fare-pricing unit: Price per person for twin-sharing basis
            Type of package: Travel by road or rail; Round trip
            Type of passenger: One Adult only
            Travel season: Peak season at destination
            Other Item Features: Entry to tourist attractions is not included
            Type of Accommodation: Hotel Room
            Hotel Characteristics: Pool; Business Centre; Currency exchange; 3 star rated hotel
            Hotel Room Characteristics: Private bathroom; TV with cable access; Direct dial telephone; Mini-bar; In room safe; Non-smoking; Air conditioning; All meals included'),
            array('pcode' => '1110111010','pname' => 'Primary Education [Annual tuition]','pspecs' => 'Primary Education
            Number of units: 1
            Unit of measurement: Annual tuition
            Establishment type: Private
            Type: Primary education, day school
            Level of education: ISCED 2011 level 1 – Primary education
            Medium (or language) of instruction: Official language
            Student: A resident (national of the country concerned)
            Entrance age (years): 5-8
            Fee: Average annual tuition per student
            Exclude from tuition: Payments for educational materials and education support services
            Remarks: Specify if classes are held "modular", "in-person", "online", "blended learning" (which is a combination of any of the options provided), etc.'),
            array('pcode' => '1110111020','pname' => 'Lower Secondary General Education [Annual tuition]','pspecs' => 'Lower Secondary General Education
            Number of units: 1
            Unit of measurement: Annual tuition
            Establishment type: Private
            Type: Lower secondary, day school
            Level of education: ISCED 2011 level 2 – Lower secondary education; entry after completion of primary education
            Field of study: ISCED Fields of Education and Training 2013
            Medium (or language) of instruction: Official language
            Student: A resident (national of the country concerned)
            Entrance age (years): 10-13
            Fee: Average annual tuition per student
            Exclude from tuition: Payments for educational materials and education support services
            Remarks: Specify if classes are held "modular", "in-person", "online", "blended learning" (which is a combination of any of the options provided), etc.'),
            array('pcode' => '1110111030','pname' => 'Upper Secondary General Education [Annual tuition]','pspecs' => 'Upper Secondary General Education
            Number of units: 1
            Unit of measurement: Annual tuition
            Establishment type: Private
            Type: Upper Secondary education, day school
            Level of education: ISCED 2011 level 3 – Upper secondary education; general school leaving certificate giving access to university level education
            Field of study: ISCED Fields of Education and Training 2013
            Medium (or language) of instruction: Official language
            Student: A resident (national of the country concerned)
            Entrance age (years): 14-16
            Fee: Average annual tuition per student
            Exclude from tuition: Payments for educational materials and education support services
            Remarks: Specify if classes are held "modular", "in-person", "online", "blended learning" (which is a combination of any of the options provided), etc.'),
            array('pcode' => '1110111040','pname' => 'Tertiary Education (ICTs Degree) [Annual tuition]','pspecs' => 'Tertiary Education (ICTs Degree)
            Number of units: 1
            Unit of measurement: Annual tuition
            Establishment type: Private
            Type: Tertiary education, full-time study
            Level of education: ISCED 2011 level 6 – Bachelor’s or equivalent level; first degree ( e.g. bachelor\'s, license, diploma, etc.)
            Field of study: ISCED Fields of Education and Training 2013
            Medium (or language) of instruction: Official language
            Student: A resident (national of the country concerned)
            Entrance age (years): 18-22
            Fee: Average annual tuition per student
            Exclude from tuition: Payments for educational materials and education support services
            Remarks: Specify if classes are held "modular", "in-person", "online", "blended learning" (which is a combination of any of the options provided), etc.'),
            array('pcode' => '1110111050','pname' => 'Tertiary Education (Economics Degree) [Annual tuition]','pspecs' => 'Tertiary Education (Economics Degree)
            Number of units: 1
            Unit of measurement: Annual tuition
            Establishment type: Private
            Type: Tertiary education, full-time study
            Level of education: ISCED 2011 level 6 – Bachelor’s or equivalent level; first degree ( e.g. bachelor\'s, license, diploma, etc.)
            Field of study: ISCED Fields of Education and Training 2013
            Medium (or language) of instruction: Official language
            Student: A resident (national of the country concerned)
            Entrance age (years): 18-22
            Fee: Average annual tuition per student
            Exclude from tuition: Payments for educational materials and education support services
            Remarks: Specify if classes are held "modular", "in-person", "online", "blended learning" (which is a combination of any of the options provided), etc.'),
            array('pcode' => '1110111060','pname' => 'Other Education Programs (Foreign Language Course or Lessons) [Hourly tuition]','pspecs' => 'Other Education Programs (Foreign Language Course or Lessons)
            Number of units: 1
            Unit of measurement: Hourly tuition
            Establishment type: Private
            Type: Foreign language class lesson (10-20 students in a class)
            Level of education: Intermediate level at a language school
            Field of study: ISCED Fields of Education and Training 2013
            Medium (or language) of instruction: English or French language (for non-native student)
            Entrance age (years): Any (not for small children)
            Fee: Average hourly fee per student
            Exclude from tuition: Payments for educational materials and education support services
            Remarks: Specify if classes are held "modular", "in-person", "online", "blended learning" (which is a combination of any of the options provided), etc.'),
            array('pcode' => '1110111070','pname' => 'Other Education Programs (Private Lessons in Mathematics, Tutoring Outside School Hours) [Hourly tuition]','pspecs' => 'Other Education Programs (Private Lessons in Mathematics, Tutoring Outside School Hours)
            Number of units: 1
            Unit of measurement: Hourly tuition
            Establishment type: Private Institution
            Type: Private tutoring for mathematics, one student with one qualified tutor
            Level of education: Tutoring, upper secondary education level
            Field of study: ISCED Fields of Education and Training 2013
            Medium (or language) of instruction: Official language
            Entrance age (years): 15-16
            Fee: Average hourly fee per student
            Exclude from tuition: Payments for educational materials and education support services; group tutoring or class
            Remarks: Specify if classes are held "modular", "in-person", "online", "blended learning" (which is a combination of any of the options provided), etc.'),
            array('pcode' => '1110111080','pname' => 'Early Childhood Education [Annual tuition]','pspecs' => 'Early Childhood Education
            Number of units: 1
            Unit of measurement: Annual tuition
            Establishment type: Private
            Type: Pre-primary education, day school
            Level of education: ISCED 2011 level 0, sub-category 2 – Pre-primary education
            Medium (or language) of instruction: Official language
            Student: A resident (national of the country concerned)
            Entrance age (years): 3-6
            Fee: Average annual tuition per student
            Exclude from tuition: Payments for educational materials and education support services; Incidental fees like early drop-off or late pick-up (outside of normal operating hours), or unscheduled care.
            Specify: Specify if classes are held "in-person", "online" or as a combination of “in-person” and “online” learning (S)
            Notes: Within ISCED 0, pre-primary education programs are targeted at children aged 3 years until the age to start ISCED 1. In each case, the upper age limit for the pre-primary education category depends on the theoretical age of entry into ISCED level 1, i.e., primary education. For international comparability purposes, \'early childhood education’ labels ISCED level 0. Programs classified at ISCED level 0 may be called early childhood education and development, play school, reception, pre-primary, pre-school, or educación inicial. Ensuring programs in crèches, daycare centers, nurseries, or guarderías meet the ISCED level 0 classification criteria specified above is imperative. This item does not cover programs providing only childcare (supervision, nutrition, and health). Education programs for pre-primary children must be full-time, which equates to five to six hours per day and 180-220 days per year.'),
            array('pcode' => '1111111010','pname' => 'Beer (lager), domestic, glass, at bar or café [1 Glass]','pspecs' => 'Beer (lager), domestic, glass, at bar or café
            Preferred quantity: 1 Glass
            Type: Drink at pub/bar/café and the like
            Serving size: 400-600 milliliters
            Main dish: Lager beer, 4-5.8 % alcohol
            Price includes: Compulsory services charges and tips; at the table with waiter service
            Exclude: Happy hour or discounted rates; draught beer
            Specify: Size observed (milliliters)'),
            array('pcode' => '1111111020','pname' => 'Coca-Cola bottle from drinks outlet [1 Bottle]','pspecs' => 'Coca-Cola bottle from drinks outlet
            Preferred quantity: 1 Bottle
            Type: Carbonated drink
            Serving size: 200-350 ml'),
            array('pcode' => '1111111030','pname' => 'Coca-Cola or Pepsi, café or restaurant [1 Glass]','pspecs' => 'Coca-Cola or Pepsi, café or restaurant
            Preferred quantity: 1 Glass
            Type: Drink at pub/bar/café/restaurant and the like
            Serving size: 1 glass, can or bottle, 300-500 milliliters
            Main dish: Carbonated drink, Coca-Cola/Pepsi Cola, Fanta
            Price includes: Compulsory services charges and tips; at the table with waiter service
            Exclude: Vending machine, takeaway
            Specify: Size observed (milliliters)'),
            array('pcode' => '1111111040','pname' => 'Cut up watermelon from street vendor [1 Portion/Serving]','pspecs' => 'Cut up watermelon from street vendor
            Preferred quantity: 1 Portion/Serving
            Type: Watermelon (fresh)
            Serving size: Single serve, (approximately) 100 gram'),
            array('pcode' => '1111111050','pname' => 'Filter coffee, small cup, at bar or café [1 Cup]','pspecs' => 'Filter coffee, small cup, at bar or café
            Preferred quantity: 1 Cup
            Type: Drink at pub/bar/café/restaurant and the like
            Main dish: Single cup small cup of filter coffee
            Price includes: Compulsory services charges and tips; at the table with waiter service
            Exclude: Takeaway'),
            array('pcode' => '1111111060','pname' => 'Fresh fruit juice drink from drinks outlet [1 Glass]','pspecs' => 'Fresh fruit juice drink from drinks outlet
            Preferred quantity: 1 Glass
            Type: Fresh fruit juice (e.g. sugarcane, calamansi, orange juice etc.)
            Serving size: 200-300 ml'),
            array('pcode' => '1111111070','pname' => 'Fried Chicken Meal, Kentucky Fried Chicken, KFC [1 Set]','pspecs' => 'Fried Chicken Meal, Kentucky Fried Chicken, KFC
            Preferred quantity: 1 Set
            Main dish: Two Fried Chicken Pieces
            Side dish: Small size fried chips (about 80g); medium carbonated drink (approx. 400 ml)'),
            array('pcode' => '1111111080','pname' => 'Hamburger, at basic eat-in place [1 Piece]','pspecs' => 'Hamburger, at basic eat-in place
            Preferred quantity: 1 Piece
            Category (of restaurant): Modest
            Type: Main course, à la carte
            Serving size: 200-300g
            Main dish: Hamburger sandwich, with beef and salad (e.g. lettuce and tomato)
            Side dish: No
            Exclude: Set meal with beverages and fries, etc.'),
            array('pcode' => '1111111090','pname' => 'Hamburger, McDonald\'s Big Mac [1 Piece]','pspecs' => 'Hamburger, McDonald\'s Big Mac
            Preferred quantity: 1 Piece
            Type: Main course, à la carte
            Serving size: 1 Big Mac
            Main dish: Big Mac
            Side dish: No
            Exclude: Set meal with beverages and fries, etc.'),
            array('pcode' => '1111111100','pname' => 'Ice cream, at tea room or coffee house [1 Portion/Serving]','pspecs' => 'Ice cream, at tea room or coffee house
            Preferred quantity: 1 Portion/Serving
            Type: Dessert
            Serving size: 2 scoops
            Main dish: Ice cream
            Price includes: Compulsory services charges and tips; at the table with waiter service
            Exclude: Homemade ice cream; extra toppings; HAAGEN DAZS, BEN & JERRY\'S and the like'),
            array('pcode' => '1111111110','pname' => 'Instant coffee from good tea/coffee shop, NESCAFE [1 Cup]','pspecs' => 'Instant coffee from good tea/coffee shop, NESCAFE
            Preferred quantity: 1 Cup
            Type: Coffee'),
            array('pcode' => '1111111120','pname' => 'Meat curry at restaurant [1 Portion/Serving]','pspecs' => 'Meat curry at restaurant
            Preferred quantity: 1 Portion/Serving
            Type: Any red meat such as beef, pork, mutton, and alike
            Serving size: Per dish serving size, approximately 160-240 gram of meat
            Main dish: Meat curry'),
            array('pcode' => '1111111130','pname' => 'Meat curry or stew, from basic eating place [1 Portion/Serving]','pspecs' => 'Meat curry or stew, from basic eating place
            Preferred quantity: 1 Portion/Serving
            Type: Meat curry or stew
            Serving size: Approximately 100-200 of all meat, no bones'),
            array('pcode' => '1111111140','pname' => 'Meat dumplings, from basic eating place, Take away/To go /Take out [1 Portion/Serving]','pspecs' => 'Meat dumplings, from basic eating place, Take away/To go /Take out
            Preferred quantity: 1 Portion/Serving
            Type: Meat based dumplings
            Serving size: Approximately 160-240 Gram (specify number of dumplings in a serving)'),
            array('pcode' => '1111111150','pname' => 'Meat noodle soup, at basic eat-in place [1 Portion/Serving]','pspecs' => 'Meat noodle soup, at basic eat-in place
            Preferred quantity: 1 Portion/Serving
            Category (of restaurant): Modest
            Type: Main course, à la carte
            Serving size: 1 portion; approximately 400 grams
            Main dish: Meat noodle soup (any type of meat with small piece ingredients)
            Price includes: Compulsory services charges and tips; at the table with waiter service'),
            array('pcode' => '1111111160','pname' => 'Mineral water, still, bottle, at bar or café [1 Bottle]','pspecs' => 'Mineral water, still, bottle, at bar or café
            Preferred quantity: 1 Bottle
            Category (of restaurant): Drink at pub/bar/café/restaurant and the like
            Serving size: 300-500 milliliters
            Main dish: Mineral water (still)
            Price includes: Compulsory services charges and tips; at the table with waiter service
            Exclude: Vending machine, takeaway
            Specify: Size observed (mililiters)'),
            array('pcode' => '1111111170','pname' => 'Orange juice, glass, at bar or café [1 Glass]','pspecs' => 'Orange juice, glass, at bar or café
            Preferred quantity: 1 Glass
            Type: Drink at pub/bar/café/restaurant and the like
            Serving size: 200-300 milliliters
            Main dish: Orange juice (industrially produced juice)
            Price includes: Compulsory services charges and tips; at the table with waiter service
            Exclude: Freshly pressed juice
            Specify: Size observed (milliliters)'),
            array('pcode' => '1111111180','pname' => 'Pad Thai or Fried Noodles with Meat, from basic eating place [1 Portion/Serving]','pspecs' => 'Pad Thai or Fried Noodles with Meat, from basic eating place
            Preferred quantity: 1 Portion/Serving
            Type: Fried Noodles
            Serving size: Approximately 320-480 gram'),
            array('pcode' => '1111111190','pname' => 'Salad, starter, at restaurant [1 Portion/Serving]','pspecs' => 'Salad, starter, at restaurant
            Preferred quantity: 1 Portion/Serving
            Category (of restaurant): Middle class
            Type: Starter, à la carte, evening
            Serving size: 1 portion
            Main dish: Cold salad (lettuce, onion, tomatoes, cucumber, crouton or pepper)
            Side dish: No
            Price includes: Compulsory services charges and tips
            Exclude: Meat or additional protein item'),
            array('pcode' => '1111111200','pname' => 'Single Banana from street vendor [1 Piece]','pspecs' => 'Single Banana from street vendor
            Preferred quantity: 1 Piece
            Type: Banana (fresh)
            Serving size: 6-7 inches (15-18 cm) in length'),
            array('pcode' => '1111111210','pname' => 'Steamed or fried whole fish, with side dish, at restaurant [1 Portion/Serving]','pspecs' => 'Steamed or fried whole fish, with side dish, at restaurant
            Preferred quantity: 1 Portion/Serving
            Category (of restaurant): Middle class
            Type: Main course, local or regional fish
            Serving size: 250 gram fish
            Main dish: Steamed or fried whole fish
            Side dish: 2 (e.g. rice and vegetables)
            Price includes: Compulsory services charges and tips
            Specify: Type of fish'),
            array('pcode' => '1111111220','pname' => 'Sweet and sour chicken, at restaurant [1 Portion/Serving]','pspecs' => 'Sweet and sour chicken, at restaurant
            Preferred quantity: 1 Portion/Serving
            Category (of restaurant): Modest
            Type: Main course, à la carte, evening
            Serving size: 1 portion
            Main dish: Sweet and sour chicken
            Side dish: 1 (e.g. white boiled rice, French fries etc.)
            Price includes: Compulsory services charges and tips'),
            array('pcode' => '1111111230','pname' => 'Vegetarian curry at restaurant [1 Portion/Serving]','pspecs' => 'Vegetarian curry at restaurant
            Preferred quantity: 1 Portion/Serving
            Serving size: Per dish serving size, approximately 240-360 gram
            Main dish: Vegetarian curry'),
            array('pcode' => '1111111240','pname' => 'Vegetarian Curry, from basic eating place [1 Portion/Serving]','pspecs' => 'Vegetarian Curry, from basic eating place
            Preferred quantity: 1 Portion/Serving
            Type: Vegetarian Curry
            Serving size: Approximately 320-480 gram'),
            array('pcode' => '1111111250','pname' => 'Chicken fried rice at restaurant or cafe [1 Portion/Serving]','pspecs' => 'Chicken fried rice at restaurant or cafe
            Preferred quantity: 1 Portion/Serving
            Type: contain rice, chicken, some vegetables, flavouring ingredients
            Serving size: Regular single portion/serving
            Price includes: Compulsory services charges and tips; at the table with waiter service'),
            array('pcode' => '1111211010','pname' => 'Hotel, two-star, capital city, 1 occupant [1 Night]','pspecs' => 'Hotel, two-star, capital city, 1 occupant
            Preferred quantity: 1 Night
            Rating: 2 Star
            Hotels or chains: Regional or national hotels or chains
            Location: Central
            Room: Single
            Number of occupants: 1
            Breakfast: Not included
            Arrival: Mid-week in a off-peak month
            Type of room rate: For private persons, cancellation allowed without costs up to 24h before arrival
            Pricing: Per room per night
            Features: Telephone device, air conditioning/heater, private toilet and shower
            Price excludes: Airport transfer
            Exclude: International chains, business rates, days with important fairs, member (loyalty) card prices
            Specify: Hotel name, any additional services included'),
            array('pcode' => '1111211020','pname' => 'Hotel, four-star, capital city, with breakfast [1 Night]','pspecs' => 'Hotel, four-star, capital city, with breakfast
            Preferred quantity: 1 Night
            Rating: Four-star
            Hotels or chains: Golden Tulip, Choice Hotels, Best Western, Mercure, and similar
            Location: Central
            Room: Standard double
            Number of occupants: 2
            Breakfast: Included
            Arrival: Weekend in a off-peak month
            Type of room rate: For private persons, cancellation allowed without costs up to 24h before arrival
            Pricing: Per room per night
            Features: Reception, doorman service, concierge, lobby, TV, cable, telephone device, internet access, air conditioning/heater, private toilet and shower, accept credit/debit cards
            Price excludes: Airport transfer
            Exclude: Business rates, days with important fairs, member (loyalty) card prices
            Specify: Hotel name, any additional services included'),
            array('pcode' => '1111211030','pname' => 'Hotel, three-star, capital city, with breakfast [1 Night]','pspecs' => 'Hotel, three-star, capital city, with breakfast
            Preferred quantity: 1 Night
            Rating: Three-star
            Hotels or chains: Regional or national hotels or chains
            Location: Central
            Room: Single
            Number of occupants: 1
            Breakfast: Included
            Arrival: Mid-week in a off-peak month
            Type of room rate: For private persons, cancellation allowed without costs up to 24h before arrival
            Pricing: Per room per night
            Features: TV, cable, telephone device, internet access, air conditioning/heater, private toilet and shower
            Price excludes: Airport transfer
            Exclude: Business rates, days with important fairs, member (loyalty) card prices
            Specify: Hotel name, any additional services included'),
            array('pcode' => '1111211040','pname' => 'Hotel, three-star, capital city, without breakfast [1 Night]','pspecs' => 'Hotel, three-star, capital city, without breakfast
            Preferred quantity: 1 Night
            Rating: Three-star
            Hotels or chains: Regional or national hotels or chains
            Location: Central
            Room: Single
            Number of occupants: 1
            Breakfast: Not included
            Arrival: Mid-week in a off-peak month
            Type of room rate: For private persons, cancellation allowed without costs up to 24h before arrival
            Pricing: Per room per night
            Features: TV, cable, telephone device, internet access, air conditioning/heater, private toilet and shower
            Price excludes: Airport transfer
            Exclude: Business rates, days with important fairs, member (loyalty) card prices
            Specify: Hotel name, any additional services included'),
            array('pcode' => '1111211050','pname' => 'Youth hostel, capital city, without breakast [1 Night]','pspecs' => 'Youth hostel, capital city, without breakast
            Preferred quantity: 1 Night
            Hotels or chains: International Youth Hostel Federation (IYHF) or its official associated organization
            Location: Central
            Room: Common dormitory (3-6 beds), with common bathroom for the dormitory
            Number of occupants: 1
            Breakfast: Not included
            Arrival: Weekend in a off-peak month
            Type of room rate: For private persons, cancellation allowed without costs up to 24h before arrival
            Pricing: Per room per night
            Features: Shared bedroom and bathroom
            Price excludes: Air port transfer
            Exclude: Any special discounts for IYFH members, days with important fairs
            Specify: Hostel name'),
            array('pcode' => '1112111010','pname' => 'Boy\'s haircut, basic hairdresser [1 Service]','pspecs' => 'Boy\'s haircut, basic hairdresser
            Preferred quantity: 1 Service
            Type: Scissors cut, dry
            Type of establishment: Common hairdresser for men or unisex
            Length of hair: Short
            Shampoo/washing: No
            Blow drying: No
            Client: Male Child
            Price includes: Compulsory services charges and tips (if any, please indicate)'),
            array('pcode' => '1112111020','pname' => 'Men\'s haircut, barber shop [1 Service]','pspecs' => 'Men\'s haircut, barber shop
            Preferred quantity: 1 Service
            Type: Scissors cut, dry
            Type of establishment: Common men\'s barber shop
            Length of hair: Short
            Shampoo/washing: No
            Blow drying: No
            Styling products: No
            Client: Male adult
            Exclude: Hair stylist
            Price includes: Compulsory services charges and tips'),
            array('pcode' => '1112111030','pname' => 'Men\'s styled haircut with shampoo & blow dry [1 Service]','pspecs' => 'Men\'s styled haircut with shampoo & blow dry
            Preferred quantity: 1 Service
            Type: Haircut with shampoo; conditioning
            Length of hair: Short
            Shampoo/washing: Yes
            Blow drying: Yes
            Client: Adult'),
            array('pcode' => '1112111040','pname' => 'Women\'s basic haircut [1 Service]','pspecs' => 'Women\'s basic haircut
            Preferred quantity: 1 Service
            Type: Haircut without shampoo
            Length of hair: Shoulder length hair
            Shampoo/washing: No
            Blow drying: No
            Client: Adult'),
            array('pcode' => '1112111050','pname' => 'Women\'s hair coloring, basic hairdresser [1 Service]','pspecs' => 'Women\'s hair coloring, basic hairdresser
            Preferred quantity: 1 Service
            Type: Hair coloring, one permanent color, no haircut
            Type of establishment: Common hairdresser
            Length of hair: medium (by the shoulders)
            Shampoo/washing: Yes
            Styling products: Normal shampoo, coloring product, styling product
            Client: Female adult
            Exclude: Haircut, bleach, foils, highlights, multi-colors'),
            array('pcode' => '1112111060','pname' => 'Women\'s haircut, basic hairdresser [1 Service]','pspecs' => 'Women\'s haircut, basic hairdresser
            Preferred quantity: 1 Service
            Type: Scissors cut, wet
            Type of establishment: Common hairdresser
            Length of hair: Long (cut to short)
            Shampoo/washing: Yes
            Blow drying: Yes
            Styling products: Normal shampoo, styling product
            Client: Female adult
            Exclude: Hair stylist
            Price includes: Compulsory services charges and tips'),
            array('pcode' => '1112121010','pname' => 'Adult body moisturizer, WKB [200 Milliliter]','pspecs' => 'Adult body moisturizer, WKB
            Brand: Well known such as Nivea
            Preferred quantity: 200
            Quantity range: 150 - 250 Milliliter
            Packaging: Plastic bottle
            Specify: Brand'),
            array('pcode' => '1112121020','pname' => 'Baby diapers, multipack, WKB [24 Piece]','pspecs' => 'Baby diapers, multipack, WKB
            Brand: Well Known
            Preferred quantity: 24
            Quantity range: 18 - 30 Piece
            Type: Baby diapers, classic or basic, size medium (4-9.5 kg)
            Packaging: Multipack
            Exclude: Pull-ups
            Specify: Brand, model'),
            array('pcode' => '1112121030','pname' => 'Baby lotion, WKB [200 Milliliter]','pspecs' => 'Baby lotion, WKB
            Brand: Well known such as Johnson & Johnson
            Preferred quantity: 200
            Quantity range: 150 - 250 Milliliter
            Packaging: Plastic bottle
            Specify: Brand'),
            array('pcode' => '1112121040','pname' => 'Baby powder, WKB [100 Gram]','pspecs' => 'Baby powder, WKB
            Brand: Well known such as Johnson & Johnson
            Preferred quantity: 100
            Quantity range: 100 - 200 Gram
            Packaging: Plastic
            Specify: Brand'),
            array('pcode' => '1112121050','pname' => 'Bar soap, solid, WKB [100 Gram]','pspecs' => 'Bar soap, solid, WKB
            Brand: Camay, Fa, Lux, Nivea, Palmolive
            Preferred quantity: 100
            Quantity range: 80 - 150 Gram
            Type: Bar, plain, regular scent, boxed or wrapped
            Packaging: Sold individually
            Exclude: Multipack
            Specify: Brand'),
            array('pcode' => '1112121060','pname' => 'Brush for women, BL [1 Piece]','pspecs' => 'Brush for women, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Brush
            Packaging: Loose or common packaging
            Specify: Brand, if any'),
            array('pcode' => '1112121070','pname' => 'Comb, BL [1 Piece]','pspecs' => 'Comb, BL
            Brand: Brandless
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Comb
            Packaging: Loose or common packaging
            Specify: Brand, if any'),
            array('pcode' => '1112121080','pname' => 'Deodorant, roll on, women, WKB [75 Milliliter]','pspecs' => 'Deodorant, roll on, women, WKB
            Brand: Well known such as Rexona
            Preferred quantity: 75
            Quantity range: 50 - 85 Milliliter
            Type: Underarm deodorant
            Packaging: Plastic bottle
            Specify: Brand'),
            array('pcode' => '1112121090','pname' => 'Deodorant, roll-on, for men, WKB [50 Milliliter]','pspecs' => 'Deodorant, roll-on, for men, WKB
            Brand: Camay, Fa, Nivea, Rexona/Sure/Sterilan
            Preferred quantity: 50
            Quantity range: 40 - 60 Milliliter
            Type: Roll-on deodorant for men
            Packaging: Sold individually
            Exclude: Multipack; "maximum protection"
            Specify: Brand'),
            array('pcode' => '1112121100','pname' => 'Deodorant, spray, for men, WKB [175 Milliliter]','pspecs' => 'Deodorant, spray, for men, WKB
            Brand: Well known such as Rexona
            Preferred quantity: 175
            Quantity range: 140 - 210 Milliliter
            Type: Underarm deodorant for men
            Packaging: Tin bottle
            Exclude: Multipack; "maximum protection"
            Specify: Brand'),
            array('pcode' => '1112121110','pname' => 'Deodorant, stick, for women, WKB [20 Gram]','pspecs' => 'Deodorant, stick, for women, WKB
            Brand: Well known such as Rexona
            Preferred quantity: 20
            Quantity range: 15 - 40 Gram
            Type: Underarm deodorant for women
            Packaging: Plastic bottle
            Specify: Brand'),
            array('pcode' => '1112121120','pname' => 'Hair Dryer, Philips, 3000 Series [1 Piece]','pspecs' => 'Hair Dryer, Philips, 3000 Series
            Brand: Philips
            Model: 3000 Series
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Hand held; 1600 watts; 3 heat and speed settings
            Packaging: Box
            Exclude: Hair styling set
            Specify: Model'),
            array('pcode' => '1112121130','pname' => 'Lipstick, WKB [1 Piece]','pspecs' => 'Lipstick, WKB
            Brand: Well known such as Revlon
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Lip color
            Packaging: Plastic
            Specify: Brand'),
            array('pcode' => '1112121140','pname' => 'Nail clippers, BNR [1 Piece]','pspecs' => 'Nail clippers, BNR
            Brand: Not relevant
            Preferred quantity: 1
            Quantity range: 1 Piece
            Packaging: Common packaging'),
            array('pcode' => '1112121150','pname' => 'Safety razor, refillable, GILLETTE [1 Piece]','pspecs' => 'Safety razor, refillable, GILLETTE
            Brand: Gillette
            Model: Mach3 Turbo
            Preferred quantity: 1
            Quantity range: 1 Piece
            Type: Regular safety razor, plastic and metal combination, double edge
            Packaging: 1 razor with 1 - 2 cartridges (blades)
            Exclude: Electric powered razors; power/styler series; groomer pieces
            Specify: Model'),
            array('pcode' => '1112121160','pname' => 'Shampoo, WKB [200 Milliliter]','pspecs' => 'Shampoo, WKB
            Brand: Well known such as Sunsilk
            Preferred quantity: 200
            Quantity range: 175 - 300 Milliliter
            Type: Shampoo
            Packaging: Plastic bottle
            Specify: Brand'),
            array('pcode' => '1112121170','pname' => 'Shaving foam, WKB [200 Gram]','pspecs' => 'Shaving foam, WKB
            Brand: Well known such as Gillette
            Preferred quantity: 200
            Quantity range: 150 - 250 Gram
            Type: Shaving foam
            Packaging: Pressurized can
            Specify: Brand'),
            array('pcode' => '1112121180','pname' => 'Toothbrush for adult, WKB [1 Piece]','pspecs' => 'Toothbrush for adult, WKB
            Brand: Well known such as Colgate
            Preferred quantity: 1
            Quantity range: 1 Piece
            Packaging: Carton
            Specify: Brand'),
            array('pcode' => '1112121190','pname' => 'Toothpaste, 100 grams, WKB [100 Gram]','pspecs' => 'Toothpaste, 100 grams, WKB
            Brand: Well known such as Colgate
            Preferred quantity: 100
            Quantity range: 75 - 185 Gram
            Type: Basic, plain toothpaste
            Packaging: Tube
            Specify: Brand'),
            array('pcode' => '1112121200','pname' => 'Toothpaste, tube, COLGATE [100 Milliliter]','pspecs' => 'Toothpaste, tube, COLGATE
            Brand: Colgate
            Model: Classic Total 12
            Preferred quantity: 100
            Quantity range: 50 - 100 Milliliter
            Type: Toothpaste for adults
            Packaging: Sold individually
            Exclude: Whitening toothpaste'),
            array('pcode' => '1112121210','pname' => 'Sanitary pad with wings, multipack, WKB [10 Piece]','pspecs' => 'Sanitary pad with wings, multipack, WKB
            Brand: Well Known
            Preferred quantity: 10
            Quantity range: 8 - 12 Piece
            Type: Regular sanitary pad
            Packaging: Multipack; individually wrapped towels/napkins
            Exclude: Long, night
            Specify: Brand'),
            array('pcode' => '1112121220','pname' => 'Shower gel, BL [200 Milliliter]','pspecs' => 'Shower gel, BL
            Preferred quantity: 200
            Quantity range: 200 - 750 Milliliter
            Type: Shower gel for normal skin
            Packaging: Sold individually
            Exclude: Multipack
            Specify: Brand
            Reference Quantity: 200
            Reference unit of measurement: Milliliter
            Notes: New item'),
            array('pcode' => '1112311010','pname' => 'Earrings without stone, 18 Carat Gold, BNR [1 Pair]','pspecs' => 'Earrings without stone, 18 Carat Gold, BNR
            Preferred quantity: 1 Pair
            Brand: Brand not relevant
            Type: Stud/sphere
            Weight: 3-5 Gram (price for 5 Gram) of gold in earrings
            Material: Genuine; gold, 18 carats'),
            array('pcode' => '1112311020','pname' => 'Earrings without stone, 22 Carat Gold, BNR [1 Pair]','pspecs' => 'Earrings without stone, 22 Carat Gold, BNR
            Preferred quantity: 1 Pair
            Brand: Brand not relevant
            Type: Stud/sphere
            Weight: 3-5 Gram (price for 5 Gram) of gold in earrings
            Material: Genuine; gold, 22 carats'),
            array('pcode' => '1112311030','pname' => 'Earrings without stone, 24 Carat Gold, BNR [1 Pair]','pspecs' => 'Earrings without stone, 24 Carat Gold, BNR
            Preferred quantity: 1 Pair
            Brand: Brand not relevant
            Type: Stud/sphere
            Weight: 3-5 Gram (price for 5 Gram) of gold in earrings
            Material: Genuine; gold, 24 carats'),
            array('pcode' => '1112311040','pname' => 'Plain gold necklace, 18 Carat Gold, BNR [1 Piece]','pspecs' => 'Plain gold necklace, 18 Carat Gold, BNR
            Preferred quantity: 1 Piece
            Brand: Brand not relevant
            Type: Link
            Weight: 10 Gram to make an 18 carats necklace
            Dimensions: 17-19 inches
            Material: Genuine; gold, 18 carats'),
            array('pcode' => '1112311050','pname' => 'Plain gold necklace, 22 Carat Gold, BNR [1 Piece]','pspecs' => 'Plain gold necklace, 22 Carat Gold, BNR
            Preferred quantity: 1 Piece
            Brand: Brand not relevant
            Type: Link
            Weight: 10 Gram to make a 22 carats necklace
            Dimensions: 17-19 inches
            Material: Genuine; gold, 22 carats'),
            array('pcode' => '1112311060','pname' => 'Plain gold necklace, 24 Carat Gold, BNR [1 Piece]','pspecs' => 'Plain gold necklace, 24 Carat Gold, BNR
            Preferred quantity: 1 Piece
            Brand: Brand not relevant
            Type: Link
            Weight: 10 Gram to make a 24 carats necklace
            Dimensions: 17-19 inches
            Material: Genuine; gold, 24 carats'),
            array('pcode' => '1112311070','pname' => 'Wall clock, other than SEIKO, WKB [1 Piece]','pspecs' => 'Wall clock, other than SEIKO, WKB
            Preferred quantity: 1 Piece
            Brand: Well known other than Seiko
            Dimensions: 25 cm diameter; 2 cm depth
            Material: Metal case/cabinet
            Specify: Brand, model'),
            array('pcode' => '1112311080','pname' => 'Wall clock, SEIKO [1 Piece]','pspecs' => 'Wall clock, SEIKO
            Brand: Seiko
            Preferred quantity: 1 Piece
            Model: Standard (such as QXA137SLH)
            Type: Analog wall clock
            Dimensions: 25-30 cm diameter x 3.5 cm
            Features: Time display
            Material: Metal case (cabinet); glass clock face
            Exclude: Digital clocks
            Specify: Model'),
            array('pcode' => '1112311090','pname' => 'Wedding ring, 18 Carat Gold, BNR [1 Piece]','pspecs' => 'Wedding ring, 18 Carat Gold, BNR
            Preferred quantity: 1 Piece
            Brand: Brand not relevant
            Type: Unisex
            Weight: 5 Gram of gold in ring
            Dimensions: 5 mm in width
            Material: 18 carats'),
            array('pcode' => '1112311100','pname' => 'Wedding ring, 22 Carat Gold, BNR [1 Piece]','pspecs' => 'Wedding ring, 22 Carat Gold, BNR
            Preferred quantity: 1 Piece
            Brand: Brand not relevant
            Type: Unisex
            Weight: 5 Gram of gold in ring
            Dimensions: 5 mm in width
            Material: Gold, 22 carats'),
            array('pcode' => '1112311110','pname' => 'Wedding ring, 24 Carat Gold, BNR [1 Piece]','pspecs' => 'Wedding ring, 24 Carat Gold, BNR
            Preferred quantity: 1 Piece
            Brand: Brand not relevant
            Type: Unisex
            Weight: 5 Gram of gold in ring
            Dimensions: 5 mm in width
            Material: 24 carats'),
            array('pcode' => '1112311120','pname' => 'Wrist-watch, men\'s, CITIZEN Corso [1 Piece]','pspecs' => 'Wrist-watch, men\'s, CITIZEN Corso
            Brand: Citizen
            Preferred quantity: 1 Piece
            Model: Corso BM7100 (men\'s)
            Type: Men\'s wrist-watch
            Dimensions: Case size 40 mm
            Features: Three-hands, time, date, fold over clasp with push button
            Material: Titanium case and bracelet, mineral crystal
            Exclude: Other models leather band, advanced features
            Specify: Model'),
            array('pcode' => '1112311130','pname' => 'Wrist-watch, men\'s, Seiko [1 Piece]','pspecs' => 'Wrist-watch, men\'s, Seiko
            Preferred quantity: 1 Piece
            Brand: Seiko
            Features: Water resistant
            Material: Stainless steel case'),
            array('pcode' => '1112321010','pname' => 'Men\'s wallets, WKB-M [1 Piece]','pspecs' => 'Men\'s wallets, WKB-M
            Brand: Well known
            Brand Stratum: Medium
            Preferred quantity: 1 Piece
            Type: Bifold leather wallet, for men
            Dimensions: Approx 12 x 10 cm
            Material: Leather; type-genuine leather
            Compartments: Separate compartments for credit cards, bank notes and coins
            Specify: Brand'),
            array('pcode' => '1112321020','pname' => 'School bag, BL [1 Piece]','pspecs' => 'School bag, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: School bag (Backpack) for Middle school kids
            Dimensions: Length- approx. 30cm; height- approx. 44cm; depth (thickness)-approx.15cm
            Material: Nylon or polyester
            Compartments: Inside pockets/compartments-1; Outside pockets/compartments-2'),
            array('pcode' => '1112321030','pname' => 'Travel bag, synthetic, BL [1 Piece]','pspecs' => 'Travel bag, synthetic, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Travel bag (duffel bag)
            Dimensions: 40 (W) x 25 (H) x 23 (D) cm
            Wheels: None
            Handle: Two soft
            Material: Synthetic
            Compartments: Three (one main and two secondary) to five
            Specify: Label, if any'),
            array('pcode' => '1112321040','pname' => 'Trolley, hard case, WKB [1 Piece]','pspecs' => 'Trolley, hard case, WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Hard case trolley
            Dimensions: 62 (W) x 77 (H) x 33 (D) cm
            Wheels: Four, ball bearing (360° moveable)
            Handle: One extensible to pull; two hard
            Material: Synthetic
            Specify: Brand, model'),
            array('pcode' => '1112321050','pname' => 'Trolley, soft case, BL [1 Piece]','pspecs' => 'Trolley, soft case, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Soft case trolley
            Dimensions: 65 (W) x 40 (H) x 20 (D) cm
            Wheels: Two; not ball bearing (not 360° moveable)
            Handle: One extensible to pull; one soft
            Material: Synthetic
            Compartments: Two or more
            Specify: Label, if any'),
            array('pcode' => '1112321060','pname' => 'Umbrella, foldable, BL [1 Piece]','pspecs' => 'Umbrella, foldable, BL
            Brand: Brandless
            Preferred quantity: 1 Piece
            Type: Foldable umbrella, automatic open
            Dimensions: Total length 40-60 cm; arch approx. 100 cm
            Mechanism: Automatic open with button, close manually; double folding mechanism
            Material: Synthetic or plastic handle; nickel frame; nylon shell
            Specify: Label, if any'),
            array('pcode' => '1112321070','pname' => 'Umbrella, manual, WKB [1 Piece]','pspecs' => 'Umbrella, manual, WKB
            Brand: Well known
            Preferred quantity: 1 Piece
            Type: Manual
            Dimensions: Arch approx. 70 cm
            Handle: Metal
            Material: Nylon
            Specify: Brand'),
            array('pcode' => '1112321080','pname' => 'Women\'s handbags, WKB [1 Piece]','pspecs' => 'Women\'s handbags, WKB-M
            Brand: Well known
            Brand stratum: Medium
            Preferred quantity: 1 Piece
            Type: Tote bag
            Dimensions: 15 x 25 cm
            Material: Synthetic (faux) leather
            Specify: Brand'),
            array('pcode' => '1112321090','pname' => 'Women\'s handbags, synthetic leather, BNR (1 piece) [1 Piece]','pspecs' => 'Women\'s handbags, synthetic leather, BNR
            Brand: Brand not relevant
            Preferred quantity: 1 Piece
            Type: Bifold synthetic leather, tote bag
            Dimensions: length
            Material: Synthetic leather
            Specify: Brand, if any'),
            array('pcode' => '1112321100','pname' => 'Cabin bag (trolley), hard case, WKB (1 piece) [1 Piece]','pspecs' => 'Cabin bag (trolley), hard case, WKB
            Brand: Well Known
            Preferred quantity: 1 Piece
            Type: Hard case
            Dimensions: height
            Wheels: 2-4 wheels
            Handle: one extensible to pull; 1 or 2 hard
            Material: Synthetic
            Specify: Brand, country'),
            array('pcode' => '1112321110','pname' => 'School backpack, for children, BL [1 Piece]','pspecs' => 'School backpack, for children, BL
            Preferred quantity: 1 Piece
            Type: Rucksack (backpack); simple
            Dimensions: 27 (W) x 35 (H) x 15 (D) cm
            Wheels: None
            Handle: Soft
            Material: Synthetic
            Compartments: Two (none inside, one outside with zip)
            Specify: Label, if any
            Reference Quantity: 1
            Reference unit of measurement: Piece
            Label, if any: (S)
            Notes: New item'),
        );

            $slicer = floor(999 / sizeof($products[0]));
            $slices = array_chunk($products, $slicer);
            foreach ($slices as $slice) {
            DB::table('household_products')->insert($slice);
            }            

            DB::statement('PRAGMA foreign_keys = ON;');
    }
}
