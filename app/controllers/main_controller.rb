class MainController < ApplicationController
	def index
	end

	def search
		@hotels = Hotel.all
		@results = []
		@hotels.each do |h|
			count = 0
			h.rooms.each do |r|
				count+=1 if r.book == false
			end
			@results << h if count > params[:nb_rooms].to_i
		end
	end

	def algo
	end

	def exo1
		counts = Hash.new 0
		params[:text].scan(/\w/).each do |c|
			counts[c.downcase] += 1
		end
		@result = counts.sort_by { |c, value| value }.reverse
	end

	def exo2
		@panier = {
		['name' => 'figurine maitre yoda',
		'price_ht' => 47.50,
		'code_tva' => 2,
		'qty' => 3],
		['name' => 'Chewing gum Chewbaka',
		'price_ht' => 1.45,
		'code_tva' => 1,
		'qty' => 15],
		['name' => 'Taille crayon R2D2',
		'price_ht' => 7.80,
		'code_tva' => 2,
		'qty' => 2],
		['name' => 'Boules de pétanque BB-8 (x2)',
		'price_ht' => 34.80,
		'code_tva' => 2,
		'qty' => 3]}

		@total_ht = 0
		@total_discount = 0
		@total_tva5 = 0
		@total_tva20 = 0
		@total_ttc = 0

		panier.each do |p|
			if p.qty < 2
				@total_ht = @total_ht + p.price_ht
			elsif (p.qty > 2 && p.qty < 10)
				discount = (5/100)*p.price_ht
				@total_ht = @total_ht + p.price_ht - discount
				@total_discount += discount
			elsif p.qty > 10
				discount = (10/100)*p.price_ht
				@total_ht = total_ht + p.price_ht - discount
				@total_discount += discount
			end
		end

		panier.each do |p|
		end

		# total_ht => 269.73
		# [total_discount] => 14.52
		# [total_tva5] => 0.98
		# [total_tva20] => 50.03
		# [total_ttc] => 320.74
	end
end